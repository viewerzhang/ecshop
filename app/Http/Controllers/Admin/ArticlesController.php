<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Articles;
use App\Http\Requests\ArticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search','');
               
        $data = Articles::where('art_title','like','%'.$search.'%')->orderBy('id','desc')->paginate(7);
        // 加载视图
         return view('admin/articles/index',['data'=>$data,'request'=> $request->all()]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/articles/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $request)
    {
        $this->validate($request, [
            'art_img' => 'required',  
        ],[
            'art_img.required' => '缩略图必填',  
        ]);
        
        $data = $request->except('_token');
        //dump($data);

        //检查是否有文件上传
        if ($request->hasFile('art_img')) {

                //文件上传
                $file = $request->file('art_img');//创建文件上传对象
              
                // 获取文件后缀
                $ext = $file->extension();
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                 $file->storeAs('/admin/images/articles',$file_name);

                $data['art_img']=$file_name;
                
                $res = Articles::insert($data);
                //dd($res);          
        }        

        //return redirect('admin/articles/index',['data'=>$data]);
        return redirect('/admin/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Articles::where('id',$id)->first();
        //dd($data);
        return view('admin/articles/show',['data'=>$data]);
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
        $data = Articles::find($id);
        //dd($data);
        //return view('admin.articles.edit');
        return view('admin/articles/edit',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticlesRequest $request, $id)
    {
        $data  = $request->except(['_token','_method']);
        //dd($data);

        //检查是否有文件上传
       if ($request->hasFile('art_img')) {

                //文件上传
                $file = $request->file('art_img');//创建文件上传对象
               
                // 获取文件后缀
                $ext = $file->extension();
                // 拼接名称
                $file_name = time()+rand(1000,9999).'.'.$ext;

                $file->storeAs('/admin/images/articles',$file_name);

                $data['art_img']=$file_name;
                
                 
                //dump($res);
              
        }     
        Articles::where('id',$id)->update($data);
        return redirect('/admin/articles');
        //return redirect('/admin/articles',['data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Articles::destroy([$id]);
        if($res){
            echo '<script>alert("删除成功");location.href="/admin/articles"</script>';
        }else{
            echo '<script>alert("删除失败");location.href="/admin/articles"</script>';
        }
    }

    //处理ajax图片上传
    public function profile(Request $request)
   {
        //获取上传的文件对象
       $file = $request->file('art_img');

       //判断文件是否有效
       if($file->isValid()){

           $ext = $file->extension();
                // 拼接名称
           $file_name = time()+rand(1000,9999).'.'.$ext;

            $path = $file->storeAs('/admin/images/articles',$file_name);

           $filepath = '/static/admin/images/articles/'.$file_name;
           //返回文件的路径
           return  $filepath;
       }

   }
}
