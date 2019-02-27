<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\GoodsType;
use App\Http\Model\Admin\GoodsAttr;

class GoodsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd(GoodsType::all());
        $search = $request->input('search','');
        $data = GoodsType::where('type_name','like','%'.$search.'%')->orderBy('id','desc')->paginate(7);
      return view('admin/goodstype/index',['data'=>$data,'request'=>$request->all()]);
      dump($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/goodstype/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->except(['_token']);
        //dump($data);
        $data = GoodsType::insert($data);
        return redirect('admin/goodstype');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $data = GoodsAttr::where('type_id',$id)->orderBy('id','desc')->paginate(7);
        
        //dd($data);
       
        return view('admin/goodstype/showattr',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
      $data = GoodsType::find($id);
      //dd($data);   
      return view('admin/goodstype/edit',['data'=>$data]);
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
       $data = $request->except(['_token','_method']);
       GoodsType::where('id',$id)->update($data);
       return redirect('/admin/goodstype');
       //dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $res = GoodsType::destroy($id);
       //dd($res);
       if($res){
           echo '<script>alert("删除成功");location.href="/admin/goodstype"</script>';
       }else{
           echo '<script>alert("删除失败");location.href="/admin/goodstype"</script>';
       }
    }
}
    