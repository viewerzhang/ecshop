<?php
 
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsBrand;
use Illuminate\Support\Facades\Storage;
use App\common\FileUtil;

class GoodsBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = $request->input('key');
        $data = GoodsBrand::where('brand_name','like','%'.$key.'%')->paginate(10);
        return view('admin.goodsbrand.index',['data' => $data,'key'=>$key]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goodsbrand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand_name' => 'required',
            'brand_url' => 'required',
            'brand_desc' => 'required',
            'brand_logo' => 'required',
        ],[
            'brand_name.required' => '品牌名称为必填项',
            'brand_url.required' => '品牌链接为必填项',
            'brand_desc.required' => '品牌关键字为必填项',
            'brand_logo.required' => '品牌图标为必填项'
        ]);
        $data = $request->except(['_token']);
        if(array_key_exists('brand_status', $data)){
            $data['brand_status'] = '1';
        }else{
            $data['brand_status'] = '2';
        }
        // 将图片从临时文件区移动到静态文件区
        $newFile = substr($data['brand_logo'], strrpos($data['brand_logo'], '/'));
        $tempFile = public_path('static/admin/images/goodsbrand/temp'.$newFile);
        $staticFile = public_path($data['brand_logo']);
        $newTempFile = str_replace('\\', '/', $tempFile);
        $newStaticFile = str_replace('\\', '/', $staticFile);
        $fu = new FileUtil();
        $fu->moveFile($newTempFile, $newStaticFile);

        $judge = GoodsBrand::insert($data);
        if($judge){
            return "<script>var a = confirm('添加品牌成功，是否继续添加？');a ? location.href='/admin/goodsbrand/create' : location.href='/admin/goodsbrand'</script>";
        }else{
            return redirect('/admin/goodsbrand/create')->with('error','对不起因为系统问题添加失败，请稍后再试或联系网站管理员！');
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GoodsBrand::find($id);
        return view('admin.goodsbrand.edit',['data'=>$data]);
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
        $this->validate($request, [
            'brand_name' => 'required',
            'brand_url' => 'required',
            'brand_desc' => 'required',
            'brand_logo' => 'required',
        ],[
            'brand_name.required' => '品牌名称为必填项',
            'brand_url.required' => '品牌链接为必填项',
            'brand_desc.required' => '品牌关键字为必填项',
            'brand_logo.required' => '品牌图标为必填项'
        ]);
        $data = $request->except(['_token','_method']);
        if(array_key_exists('brand_status', $data)){
            $data['brand_status'] = '1';
        }else{
            $data['brand_status'] = '2';
        }
        $history = GoodsBrand::find($id);
        if($history->brand_logo != $data['brand_logo']){
            $historyFile = public_path($history->brand_logo);
            $newHistoryFile = str_replace('\\', '/', $historyFile);
            if(file_exists($historyFile)){
                unlink($historyFile);
            }
            $newFile = substr($data['brand_logo'], strrpos($data['brand_logo'], '/'));
            $tempFile = public_path('static/admin/images/goodsbrand/temp'.$newFile);
            $staticFile = public_path($data['brand_logo']);
            $newTempFile = str_replace('\\', '/', $tempFile);
            $newStaticFile = str_replace('\\', '/', $staticFile);
            $fu = new FileUtil();
            $fu->moveFile($newTempFile, $newStaticFile);
        }
        $judge = GoodsBrand::where('id',$id)->update($data);
        if($judge){
            return "<script>alert('修改品牌成功！');location.href='/admin/goodsbrand'</script>";
        }else{
            return redirect('/admin/goodsbrand/create')->with('error','对不起因为系统问题修改失败，请稍后再试或联系网站管理员！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $history = GoodsBrand::find($id);
        $historyFile = public_path($history->brand_logo);
        $newHistoryFile = str_replace('\\', '/', $historyFile);
        if(file_exists($historyFile)){
            unlink($historyFile);
        }
        $judge = GoodsBrand::destroy($id);
        if($judge){
            echo true;
        }else{
            echo false;
        }
    }


    public function files(Request $request)
    {
        if($request->hasFile('pic')){
            $files = $request->file('pic');
            $fileName = $files->store('admin/images/goodsbrand/temp');
            $trueFileName = str_replace('/temp', '', $fileName);
            $arr = [
                'src'=>asset('static/'.$fileName),
                'hdsrc'=>'static/'.$trueFileName,
                'code'=>'1'
            ];
            return json_encode($arr);
        }else{
            $arr = [
                'code'=>'0',
            ];
            return json_encode($arr);
        }
    }

    public function editstatus($id)
    {
        $data = GoodsBrand::find($id);

        if($data->brand_status == '1'){
            // 当品牌状态为显示时改变品牌状态为隐藏
            $data->brand_status = '2';
            // 设置返回信息，设置状态及按钮显示文字
            $arr['code'] = '1';
            $arr['status'] = ' 显示 ';
            $arr['btn'] = ' 已隐藏 ';
        }else{
            // 当品牌状态为隐藏时改变品牌状态为显示
            $data->brand_status = '1';
            // 设置返回信息，设置状态及按钮显示文字
            $arr['code'] = '1';
            $arr['status'] = ' 隐藏 ';
            $arr['btn'] = ' 已显示 ';
        }
        if($data->save()){
            // 将成功信息返回页面
            echo json_encode($arr);
        }else{
            // 设置错误状态码
            $arr['code'] = '0';
            // 将错误状态返回页面
            echo json_encode($arr);
        }
    }



}
