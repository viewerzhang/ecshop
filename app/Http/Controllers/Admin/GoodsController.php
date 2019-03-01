<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Goods;
use App\Http\Model\Admin\GoodsCategory;
use App\Http\Model\Admin\GoodsType;
use App\Http\Model\Admin\GoodsBrand;
use App\Http\Model\Admin\GoodsImgs;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;



class GoodsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    /*    $goods_bianhao = $request->input('goods_bianhao','');
        $goods_name = $request->input('goods_name','');
        $type_id = $request->input('type_id','');


        //dd($goods_bianhao);

        $data = Goods::where('goods_bianhao', '=',$goods_bianhao)
                       ->orWhere('goods_name', 'like','%'.$goods_name .'%')
                       ->orWhere('type_id', '=',$type_id)
                       ->orderBy('id','desc')
                       ->paginate(7);
        //dump($data);*/


         $data = Goods::orderBy('id','desc')->where(function($query) use($request){
            //检测 与判断
            $goods_bianhao = $request->input('goods_bianhao');
            $goods_name = $request->input('goods_name');
            $type_id = $request->input('type_id');
            if(!empty($goods_bianhao)){
                $query->where('goods_bianhao',$goods_bianhao);
            }
            if(!empty($goods_name)){
                $query->where('goods_name','like','%'.$goods_name.'%');
            }
            if(!empty($type_id)){
                $query->where('type_id',$type_id);
            }
            
        })->paginate(7);

         

        $type = GoodsType::orderBy('id','desc')->get();
       
        //dd($data);
       return view('admin/goods/index',['type'=>$type,'data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        //获取分类
      $cate = GoodsCategory::orderByRaw(\DB::raw("concat(cate_path,id,',')"))->get();
      //获取类型
      $type = GoodsType::orderBy('id','desc')->get();
      //获取品牌
      $brand = GoodsBrand::orderBy('id','desc')->get();
      //dd($type);

      return view('admin/goods/add',['cate'=>$cate,'type'=>$type,'brand'=>$brand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //接受表单的值
        $data = $request->except(['_token','goods_img','goods_imgs']);
        //dd($data);
        $data['goods_bianhao']=date('His',time()).rand(100,999);
         //检查添加商品时候是否有主图上传
        if ($request->hasFile('goods_img')) {

                //文件上传
                $file = $request->file('goods_img');//创建文件上传对象

                // 获取文件后缀
                $ext = $file->extension(); 
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $file->storeAs('/admin/images/goods_img/',$file_name);

                $data['goods_img']=$file_name;
                
                //$res = Goods::insert($data);
                $rs = Goods::insertGetId($data);
                //dump($res);
              
        }    

        
        
        //接受上面插入的id
        

        //接受4个小图表单的值
        if ($request->hasFile('goods_imgs')) {

            $files = $request->file('goods_imgs');
                
                foreach ($files as $key => $value) {

                // 获取文件后缀
                $ext = $value->extension();

                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $value->storeAs('/admin/images/goods_imgs/',$file_name);

                $goodsimgs = [

                    'goods_imgs' => $file_name,
                    'goods_id'  => $rs
                ];

                GoodsImgs::insert($goodsimgs);
           
        }

    }
        
            return redirect('/admin/goods');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //所属分类
      $cate = GoodsCategory::orderByRaw(\DB::raw("concat(cate_path,id,',')"))->get();
      //dd($cate);
      //获取类型
      $type = GoodsType::orderBy('id','desc')->get();
      //获取品牌
      $brand = GoodsBrand::orderBy('id','desc')->get();
      //dd($type);
      $data = Goods::find($id);
      $goodsimgs = Goodsimgs::where('goods_id',$id)->get();
      return view('admin/goods/edit',['goodsimgs'=>$goodsimgs,'data'=>$data,'cate'=>$cate,'type'=>$type,'brand'=>$brand,'request'=>$request->all()]);
       //dd($id);
       
        //dd($data);
        //return view('admin.articles.edit');
       

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
       /* $data=$request->all();
        dd($data);*/
       //接受表单的值
        $data = $request->except(['_token','_method','goods_img','goods_imgs']);
       
       //$data['goods_img']=Goods::where('id',$id)->first()['goods_img'];
       
        $data['goods_bianhao'] = Goods::where('id',$id)->first()['goods_bianhao'];

      //dd($data);
      //$res1=$res['goods_bianhao'];
      //dd($res);
         //检查添加商品时候是否有主图上传
        if ($request->hasFile('goods_img')) {

             //文件上传
                $file = $request->file('goods_img');//创建文件上传对象

                // 获取文件后缀
                $ext = $file->extension(); 
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $file->storeAs('/admin/images/goods_img/',$file_name);

                $data['goods_img']=$file_name;
               
                 Goods::where('id',$id)->update($data);
       
        }    

    
        //接受上面插入的id
        $rs = Goods::insertGetId($data);
        
        // $files = Goodsimgs::where('goods_id',$id)->first();
        //dd($goods_imgs);


        //接受4个小图表单的值
        if ($request->hasFile('goods_imgs')) {

            $files = $request->file('goods_imgs');
                
                foreach ($files as $key => $value) {

                // 获取文件后缀
                $ext = $value->extension();

                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $value->storeAs('/admin/images/goods_imgs/',$file_name);

                $goodsimgs = [

                    'goods_imgs' => $file_name,
                    'goods_id'  => $rs
                ];

                //删除商品相册原数据
                $tupian = GoodsImgs::where('goods_id',$id)->get();

                GoodsImgs::where('goods_id',$id)->delete();

                //添加商品相册数据库
               $photo = GoodsImgs::insert($goodsimgs);


                if($photo){
                //成功就删除原图片
                foreach ($tupian as $k=>$v){
                    @unlink( '/static/admin/images/goods_imgs' . '/' .$v->goods_imgs);
                }
           
            }
        }

        return redirect('/admin/goods');
    }
    }

    //软删除 回收站
    public function hs(Request $request)
    {
       /* $res = Goods::destroy([140]);
        dump($res);
    /**/      
         $del_goods =Goods::onlyTrashed()->orderBy('id','desc')->where(function($query) use($request){
            //检测 与判断
            $goods_bianhao = $request->input('goods_bianhao');
            $goods_name = $request->input('goods_name');
            $type_id = $request->input('type_id');
            if(!empty($goods_bianhao)){
                $query->where('goods_bianhao',$goods_bianhao);
            }
            if(!empty($goods_name)){
                $query->where('goods_name','like','%'.$goods_name.'%');
            }
            if(!empty($type_id)){
                $query->where('type_id',$type_id);
            }
            
        })->paginate(7);


        $type = GoodsType::orderBy('id','desc')->get();



        //dump($del_goods);
         
        return view('admin/goods/hs',['del_goods'=>$del_goods,'type'=>$type,'request'=>$request->all()]);
    }


    public function destroy($id)
    {
        $res = Goods::destroy([$id]);
        //dd($res);
        if($res){
            echo '<script>alert("删除成功");location.href="/admin/goods"</script>';
        }
    }

    //回收站恢复
    public function huifu($id)
    {

        //echo $id;
        $res = Goods::withTrashed()->where('id', $id)->restore();

        if($res){
            echo '<script>alert("恢复成功");location.href="/admin/goods/hs"</script>';

        }
    }

    //回收站彻底删除
    public function shanchu($id)
    {
        $goods = Goods::onlyTrashed()->where('id', $id)->forceDelete();

        //dd($goods);
      // $goods = Goods::all();

       //dd($goods);
         //$res = $goods->forceDelete();
        //dd($res);
        if($goods){
            echo '<script>alert("删除成功");location.href="/admin/goods/hs"</script>';
        }

    }
}
