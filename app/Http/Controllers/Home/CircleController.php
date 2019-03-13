<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\GoodsShare;
use App\Http\Model\Admin\Articles;
use App\Http\Model\Home\User;
use App\Http\Model\Home\UserAsk;
use App\Http\Model\Home\UserFwllow;

class CircleController extends Controller
{
    /**
     * 显示个人中心页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = session('user.id');
        $articles = Articles::orderBy('id','desc')->get();
        $users = User::get();
        $data = GoodsShare::where(function ($query) use ($id) {
                    $fids = UserFwllow::where('uid',$id)->pluck('fid');
                    $fids[] = $id;
                    $query->whereIn('uid',$fids);
                })->orderBy('time','desc')->paginate(5);
        return view('home.circle.my',['articles'=>$articles,'data'=>$data,'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.circle.fellow'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->except(['_token']);
        $data['type'] = '1';
        $data['oid'] = '0';
        $data['uid'] = session('user.id');
        $data['time'] = time();
        $res = GoodsShare::insert($data);
        if($res){
            return back()->with('success','发表动态成功');
        }
        return back()->with('error','发表动态失败');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = Articles::orderBy('id','desc')->get();
        $user = User::find($id);
        $users = User::get();
        $data = GoodsShare::where('uid',$id)->orderBy('time','desc')->paginate(5);
        return view('home.circle.index',['users'=>$users,'user'=>$user,'articles'=>$articles,'data'=>$data]);
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

    // 显示好友请求
    public function fwllowask()
    {
        $data = UserAsk::where('fid',session('user.id'))->get();
        return view('home.circle.fellowask',['data'=>$data]);
    }

    // 同意添加好友
    public function agree($id)
    {
        $data = UserAsk::where('id',$id)->where('fid',session('user.id'))->first();
        if(!$data){
            return back()->with('error','对不起，此好友没有向您申请好友请求');
        }
        $res = UserFwllow::insert(['uid'=>session('user.id'),'fid'=>$data['uid']]);
        UserFwllow::insert(['uid'=>$data['uid'],'fid'=>session('user.id')]);
        if($res){
            UserAsk::where('id',$id)->delete();
            return back()->with('success','添加好友成功');
        }else{
            return back()->with('error','添加好友失败');
        }
    }

    // 我的好友页面
    public function fwllow()
    {
        $data = UserFwllow::where('uid',session('user.id'))->get();
       
        return view('home.circle.fellow',['data'=>$data]);
    }

    // 删除好友
    public function delete($id)
    {
        $res = UserFwllow::where('id',$id)->first();
        if(!$res){
            return back()->with('error','对不起，您没有此好友');
        }
        $res = UserFwllow::where('id',$id)->delete();
        if($res){
            return back()->with('success','删除好友成功');
        }
        return back()->with('error','删除好友失败');
    }

    // 请求添加好友
    public function add($id)
    {
        if($id == session('user.id')){
            return back()->with('error','对不起，您不可以给自己发送好友申请');
        }
        $judge = UserAsk::where('uid',session('user.id'))->where('fid',$id)->first();
        if($judge){
            return back()->with('error','对方已是您的好友');
        }
        $judge = UserAsk::where('uid',session('user.id'))->where('fid',$id)->first();
        if($judge){
            return back()->with('error','好友请求已发送，请不要重复发送');
        }
        $data = UserAsk::insert(['uid'=>session('user.id'),'fid'=>$id]);
        if($data){
            return back()->with('success','好友请求发送成功');
        }
        return back()->with('error','好友请求发送失败');
    }
}
