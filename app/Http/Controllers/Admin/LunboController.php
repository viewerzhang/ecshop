<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Lunbo;
use DB;
use App\Http\Requests\LunboRequest;

class LunboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $search = $request->input('search','');
               
        //$data = DB::table('articles')->where('title','like','%'.$search.'%')->orderBy('id','asc')->paginate(5);

        $data = Lunbo::where('lunbo_name','like','%'.$search.'%')->orderBy('id','desc')->paginate(7);
        // 加载视图
         return view('admin/lunbo/index',['request'=> $request->all(),'data'=>$data]);

       /* $lunbo_name = $request->input('lunbo_name');
        //dd($lunbo_name);

        //链接名称条件搜索
        if(empty($lunbo_name)){
             $data = Lunbo::orderBy('id','desc')->paginate(7);
        }else{
            $data = Lunbo::where('lunbo_name','like','%'.$lunbo_name.'%')->orderBy('id','desc')->paginate(7);
        }
    
       return view('admin/lunbo/index',['lunbo_name'=>$lunbo_name,'data'=>$data]);*/

    }  


    /**
     * 轮播添加
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin/lunbo/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LunboRequest $request)
    {
        $this->validate($request, [
            'lunbo_img' => 'required',  
        ],[
            'lunbo_img.required' => '链接图必填',  
        ]);

        $data = $request->except(['_token']);


        //检查是否有文件上传
        if ($request->hasFile('lunbo_img')) {

                //文件上传
                $file = $request->file('lunbo_img');//创建文件上传对象
               
                // 获取文件后缀
                $ext = $file->extension(); 
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $file->storeAs('/admin/images/lunbo',$file_name);

                $data['lunbo_img']=$file_name;
 
                //dump($res);
              
        }        

        try{
            $res = Lunbo::insert($data);
            if($res){
                return redirect('/admin/lunbo')->with('success','添加成功');
            }
        }catch(\Exception $e){
            return back()->with('error','添加失败');
        }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
       $data = Lunbo::orderBy('id','desc')->paginate(7);
        //dump($data);
        return view('admin/lunbo/index',['data'=>$data,'request'=>$request->all()]);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //dd($id);
        $data =Lunbo::find($id); 

        //dd($data);
        return view('admin/lunbo/edit',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LunboRequest $request, $id)
    {
        $data  = $request->except(['_token','_method']);
        //dd($data);

        //检查是否有文件上传
       if ($request->hasFile('lunbo_img')) {

                //文件上传
                $file = $request->file('lunbo_img');//创建文件上传对象
                
                // 获取文件后缀
                $ext = $file->extension();
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $file->storeAs('/admin/images/lunbo',$file_name);

                $data['lunbo_img']=$file_name;
                           
        }        

        try{
           $res = Lunbo::where('id',$id)->update($data);
            if($res){
                return redirect('/admin/lunbo')->with('success','修改成功');
            }
        }catch(\Exception $e){
            return back()->with('error','修改失败');
        }
            return redirect('/admin/lunbo')->with('success','修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 删除数据
        $res = Lunbo::destroy([$id]);
        if($res){
            echo '<script>alert("删除成功");location.href="/admin/lunbo/index"</script>';
        }
    }

    //处理ajax图片上传
   public function profile(Request $request)
   {
        //获取上传的文件对象
       $file = $request->file('lunbo_img');

       //判断文件是否有效
       if($file->isValid()){

           $ext = $file->extension();
                // 拼接名称
           $file_name = time()+rand(1000,9999).'.'.$ext;

            $path = $file->storeAs('/admin/images/lunbo',$file_name);

           $filepath = '/static/admin/images/lunbo/'.$file_name;
           //返回文件的路径
           return  $filepath;
       }

   }

 
}
