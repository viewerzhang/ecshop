<?php
 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsCategory;
use App\Http\Requests\GoodsCategoryRequest;
use App\Http\Model\Admin\GoodsCatepx;

class GoodsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key','');
        // $data = GoodsCategory::where('cate_name','like','%'.$key.'%')->orderByRaw(\DB::raw("concat(cate_path,id,',')"))->paginate(8);

        $catedata = self::paixu();
        self::houtaixianshi($catedata);
        // 删除全部数据
        \DB::table('goods_catepx')->where('cid','<>','-1')->delete();
        // 更新数据
        foreach(self::$arr as $k => $v){
            GoodsCatepx::insert(['prevId'=>$v->prevId,'nextId'=>$v->nextId,'id'=>$v->id,'cate_status'=>$v->cate_status,'cate_name'=>$v->catenamea]);
        }
        // 匹配查询条件列出数据
        $data = GoodsCatepx::where('cate_name','like','%'.$key.'%')->paginate(8);

        // 返回视图模板
        return view('admin.goodscategory.index',['key'=>$key,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $key = $request->input('key','');
        $data = GoodsCategory::orderByRaw(\DB::raw("concat(cate_path,id,',')"))->get();
        return view('admin.goodscategory.create',['key'=>$key,'data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsCategoryRequest $request)
    {

        $data = $request->except(['_token']);
        if($data['cate_pid'] == '0'){
            $data['cate_path'] = '0,';
        }else{
            $data['cate_path'] = GoodsCategory::find($data['cate_pid'])->cate_path.$data['cate_pid'].',';
        }
        try{
            GoodsCategory::insert($data);
        }catch(\Exception $err){
            return "<script>alert('添加失败');location.href='/admin/goodscategory'</script>";
        }
        return "<script>confirm('添加成功是否继续添加?')? history.back():location.href='/admin/goodscategory'</script>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = GoodsCategory::find($id);
        if($data->cate_status == '1'){
            $data->cate_status = '2';
            $arr = [
                'code' => '1',
                'title' => '隐藏',
                'btn' => '显示'
            ];
        }else{
            $data->cate_status = '1';
            $arr = [
                'code' => '1',
                'title' => '显示',
                'btn' => '隐藏'
            ];
        }
        try{
            $data->save();
        }catch(\Exception $err){
            $arr = [
                'code' => '0',
            ];
            return json_encode($arr);
        }
        return json_encode($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GoodsCategory::find($id);
        return view('admin.goodscategory.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = GoodsCategory::find($id);
        $data->cate_name = $request->input('cate_name');
        $name = $data->cate_name;
        try{
            $data->save();
        }catch(\Exception $err){
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
        $cateOne = GoodsCategory::find($id);
        $cateName = $cateOne->catenamea;
        $arr = [
            'code'=>'1',
            'name' => $cateName,
        ];
        return json_encode($arr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cates = GoodsCategory::where('cate_pid',$id)->first();
        if($cates){
            $arr = [
                'code' => '2',
                'msg' => '对不起，您的分类下还有子分类不能删除'
            ];
            return json_encode($arr);
        }
        try{
            GoodsCategory::destroy($id);
        }catch(\Exception $err){
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
        $arr = [
            'code'=>'1',
        ];
        return json_encode($arr);
    }


    public static function paixu($pid = 0)
    {
        // 找出是父级的记录
        $cate = GoodsCategory::where('cate_pid',$pid)->get();
        // 遍历排序
        foreach($cate as $k => $v){
            // 判断下标是否溢出
            if($k+1 < count($cate)){
                // 判断下一个值是否小于当前值
                if($v->cate_sort > $cate[$k+1]->cate_sort){
                    // 将当前值临时保存
                    $temp = $v;
                    // 将大于当前值的下标向前移一位
                    $cate[$k] = $cate[$k+1];
                    // 将当前值向后移一位
                    $cate[$k+1] = $temp;
                }
            }
        }
        // 定义空数组
        $data = [];
        // 整理数据
        foreach($cate as $k =>$v){
            $v['sum'] = self::paixu($v->id);
            $data[] = $v;
        }
        // 返回数据
        return $data;
    }

    // 定义静态变量
    static $arr;
    public static function houtaixianshi($data)
    {
        // 循环整理数据
        foreach($data as $k => $v){
                // 判断是不是第一个值
                if(isset($data[$k-1])){
                    $data[$k]->prevId = $data[$k-1]->cate_sort;
                }
                // 判断是不是最后一个值
                if(isset($data[$k+1])){
                    $data[$k]->nextId = $data[$k+1]->cate_sort;
                }
                // 将数据保存
                self::$arr[] = $v;
                // 判断出口在哪
                if(!isset($v['sum'])){
                    // 跳出去
                    continue;
                }
                // 调用自己
                self::houtaixianshi($v['sum']);
        }
        
    }

    public function prev($id)
    {
        $url = $_SERVER['HTTP_REFERER'];
        $dataTemp = GoodsCatepx::where('id',$id)->first()['prevId'];
        $data = GoodsCategory::find($id);
        $data->cate_sort = $dataTemp- mt_rand(1,3);
        try{
            $data->save();
        }catch(\Exception $err){

        }

        return "<script>location.href='{$url}'</script>";
    }
}
