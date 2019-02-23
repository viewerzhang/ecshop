<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsBrand;

class GoodsBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        dd($data);
        if($data['brand_status']){
            $data['brand_status'] = '1';
        }else{
            $data['brand_status'] = '0';
        }
        $judge = GoodsBrand::insert($data);
        if(false){
            return "<script>var a = confirm('添加品牌成功，是否继续添加？');a ? history.go(-1) : location.href='/admin/goodsbrand'</script>";
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function files(Request $request)
    {
        if($request->hasFile('pic')){
            $files = $request->file('pic');
            $fileName = $files->store('admin/images/goodsbrand');
            $arr = [
                'src'=>asset('static/'.$fileName),
                'hdsrc'=>'static/'.$fileName,
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
}
