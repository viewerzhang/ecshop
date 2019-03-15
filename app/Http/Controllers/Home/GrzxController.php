<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Users;
use App\common\Sms;
use Illuminate\Support\Facades\Redis;
use App\common\getIp;
use Mail;
use Hash;

class GrzxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Users::where('id',session('user.id'))->first();
        // dd($data);
        // dd($data);
        $data['user_phone'] = str_replace(substr($data['user_phone'],3,5), '*****', $data['user_phone']);
        // dd($data['user_phone']);
        return view('home.grzx.grzx',['data'=>$data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grzx()
    {
        // 获取数据
        $data = Users::where('id',session('user.id'))->first();
        // 将手机号中间五位用星号显示
        $data['user_phone'] = str_replace(substr($data['user_phone'],3,5), '*****', $data['user_phone']);
        return view('home.grzx.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teledit(Request $request,$id)
    {
        //
        $data = $request->except(['_token','_metch']);
        return view('home.grzx.teledit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //修改密码页面
        return view('home.grzx.editpwd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Users::find(session('user.id'));
        // 修改头像页面
        return view('home.grzx.editpic',['data'=>$data]);
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
        // 修改手机号页面
        return view('home.grzx.teledit');
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
        $phone = $request->input('dqphone');
        // dd($phone);
        $data = Users::find($id);
        // 判断用户当前输入手机是否匹配
        if($data->user_phone == $phone){
            // 判断是否发送过
            if(Redis::get($data->user_phone)){
                // 已发送过短信区间，设置状态码不再发送
                $arr = [
                    'code' => '9',
                ];
                // 返回状态码到客户端
                return json_encode($arr);
            }
            // 成功匹配且没有发送过短信区间
            // 生成验证码
            $cap = mt_rand(1000,9999);
            // 储存到redis中并设置3分钟有效时间
            $error = Redis::setex($data->user_phone,180,$cap);
            // 判断储存验证码过程是否正常
            if(!$error){
                $arr = [
                    'code' => '2',
                ];
                // 如果发生错误不在执行发送短信，并返回客户端错误信息
                return json_encode($arr);
            }
            // 没有错误发送短信验证码
            $code = Sms::sms($data->user_phone,$cap);
            // 接受运营商验证码是否发送成功信息
            $status = json_decode($code,true);
            // 判断运营商发送状态
            if($status['errmsg'] == 'OK'){
                $arr = [
                    'code' => '1', // 1表示验证成功发送验证码成功
                ];
            }else{
                $arr = [
                    'code' => '2', // 2表示验证成功发送验证码失败
                ];
            }
            // 生成并返回状态码
            return json_encode($arr);
        }else{
            // 错误直接返回状态码
            $arr = [
                'code' => '0', // 0表示验证失败，不予发送验证码
            ];
            return json_encode($arr);
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xgxx(Request $request, $id)
    {
        $old = $request->except(['_token']);
        // json_encode($data);
        // return json_encode($data);
        $conf = Users::where('id',session('user.id'))->first();
        $conf->$id =  $old['metch'];
        $judge = $conf->save();
        if($judge){
                $arr = [
                    'code'=>'1'
                ];
                session(['user'=>$conf]);
                return json_encode($arr);
        }else{
                $arr = [
                    'code'=>'0'
                ];
                return json_encode($arr);
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
        //
    }



    public function revise(Request $request,$id)
    {
        // 获取用户提交数据，去除token值
        $data = $request->except('_token');
        // 重新更新用户信息
        $history = Users::find(session('user.id'));
        // 对比用户提交手机号与更新后的信息是否一致
        if($history->user_phone == $data['dqphone']){
            // 对比用户输入验证码是否正确
            if(Redis::get($history->user_phone) == $data['code']){
                // 身份确认完成，修改数据库信息
                $history->user_phone = $data['newphone'];
                // 更新到数据库中
                $judge = $history->save();
                // 判断结果是否更新完成
                if($judge){
                    // 更新成功删除Redis中用户验证码
                    Redis::del($data['dqphone']);
                    $arr = [
                        // code 1 代表修改成功
                        'code' => '1'
                    ];
                    // 修改手机号码成功返回状态码
                    return json_encode($arr);
                }else{
                    $arr = [
                        // code 2 代表验证成功但服务器问题修改失败
                        'code' => '2'
                    ];
                    // 返回状态码
                    return json_encode($arr);
                }
            }else{
                // 验证码不匹配
                $arr = [
                    // code 3 代表验证码错误
                    'code' => '3'
                ];
                return json_encode($arr);
            }
        }else{
            // 用户提交手机号时与数据库原始手机号不符
            $arr = [
                // code 4 代表原始手机号不正确
                'code' => '4'
            ];
            return json_encode($arr);
        }
    }

    /**
     * 修改头像
     */
    public function pic(Request $request,$id)
    {

        if($request->hasFile('pic')){
            $files = $request->file('pic');
            $fileName = $files->store('/static/home/user_pic');
            $data = Users::find($id);
            $historyFile = $data->user_pic;
            $data->user_pic = $fileName;
            $judge = $data->save();
            if($historyFile != ''){
                $fileUrl = public_path($historyFile);
                if(file_exists($fileUrl)){
                    unlink($fileUrl);
                } 
            }
            if(!$judge){
                $arr = [
                    'code' => '0',
                ];
                return json_encode($arr);
            }
            $arr = [
                'src'=>$fileName,
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



    public function editpwd(Request $request,$id)
    {
        // 获取用户提交数据，去除token值
        $data = $request->except('_token');
        // dd($data);
        // 重新更新用户信息
        $history = Users::find($id);
        // 对比用户提交手机号与更新后的信息是否一致
        if($history->user_phone == $data['dqphone']){
            // 对比用户输入验证码是否正确
            if(Redis::get($history->user_phone) == $data['code']){
                // 身份确认完成，修改数据库信息
                if (Hash::needsRehash($data['newpwd'])) {
                    $data['newpwd'] = Hash::make($data['newpwd']);
                }
                $history->password = $data['newpwd'];
                // 更新到数据库中
                $judge = $history->save();
                // 判断结果是否更新完成
                // $user = Users::first($history->id);
                // session(['user'=>$user]);
                if($judge){
                    // 更新成功删除Redis中用户验证码
                    Redis::del($data['dqphone']);
                    $arr = [
                        // code 1 代表修改成功
                        'code' => '1'
                    ];
                    // 修改手机号码成功返回状态码
                    return json_encode($arr);
                }else{
                    $arr = [
                        // code 2 代表验证成功但服务器问题修改失败
                        'code' => '2'
                    ];
                    // 返回状态码
                    return json_encode($arr);
                }
            }else{
                // 验证码不匹配
                $arr = [
                    // code 3 代表验证码错误
                    'code' => '3'
                ];
                return json_encode($arr);
            }
        }else{
            // 用户提交手机号时与数据库原始手机号不符
            $arr = [
                // code 4 代表原始手机号不正确
                'code' => '4'
            ];
            return json_encode($arr);
        }
    }


    public function yzyx()
    {
        return view('home.grzx.email');
    }

    
    public function sendcode(Request $request, $id)
    {
        try{
            $phone = $request->input('dqphone');
            $data = Users::find($id);
            // 判断用户当前输入手机是否匹配
            if($data->user_phone == $phone){
                // 判断是否发送过
                if(Redis::get($data->user_phone)){
                    // 已发送过短信区间，设置状态码不再发送
                    $arr = [
                        'code' => '9',
                    ];
                    // 返回状态码到客户端
                    return json_encode($arr);
                }
                // 成功匹配且没有发送过短信区间
                // 生成验证码
                $cap = mt_rand(1000,9999);
                // 储存到redis中并设置3分钟有效时间
                $error = Redis::setex($data->user_phone,180,$cap);
                // 判断储存验证码过程是否正常
                if(!$error){
                    $arr = [
                        'code' => '2',
                    ];
                    // 如果发生错误不在执行发送短信，并返回客户端错误信息
                    return json_encode($arr);
                }
                // 没有错误发送短信验证码
                $code = Sms::sms($data->user_phone,$cap);
                // 接受运营商验证码是否发送成功信息
                $status = json_decode($code,true);
                // 判断运营商发送状态
                if($status['errmsg'] == 'OK'){
                    $arr = [
                        'code' => '1', // 1表示验证成功发送验证码成功
                    ];
                }else{
                    $arr = [
                        'code' => '2', // 2表示验证成功发送验证码失败
                    ];
                }
                // 生成并返回状态码
                return json_encode($arr);
            }else{
                // 错误直接返回状态码
                $arr = [
                    'code' => '0', // 0表示验证失败，不予发送验证码
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
        }

    }




    public function revisea(Request $request,$id)
    {
        try{
            // 获取用户提交数据，去除token值
             $data = $request->except('_token');
            // 重新更新用户信息
             $history = Users::find($id);
            // 对比用户提交手机号与更新后的信息是否一致
            if($history->user_phone == $data['dqphone']){
                // 对比用户输入验证码是否正确
                if(Redis::get($history->user_phone) == $data['code']){
                    // 身份确认完成

                    $token = str_random(32);
                    $history->token = $token;
                    $encryptEmail = encrypt($data['newemail']);
                    $history->save();
                    $url = 'http://laravel5.com/yxyx/'.$encryptEmail.'/'.$token.'/'.$id;
                    Mail::send('home.grzx.emailmb', ['encryptEmail'=>$encryptEmail,'id'=>$id,'token' => $token,'url'=>$url], function ($m) use ($data) {
                         $m->from('15161782822@163.com', 'EC优购邮箱验证通知');
                         $m->to($data['newemail'])->subject('EC邮箱验证通知');
                    });
                    Redis::del($history->user_phone);
                    $arr = [
                        'code' => '1'
                    ];
                    return json_encode($arr);
                }else{
                    // 验证码不匹配
                    $arr = [
                        // code 3 代表验证码错误
                        'code' => '3'
                    ];
                    return json_encode($arr);
                }
            }else{
                // 用户提交手机号时与数据库原始手机号不符
                $arr = [
                    // code 4 代表原始手机号不正确
                    'code' => '4'
                ];
                return json_encode($arr);
            }
        }catch(\Exception $err){
            return view('error.index');
        }
    }


    public function jm($email,$token,$id)
    {
        $user = Users::find($id);
        if(!$user){
            // 用户不存在
            return view('error.index');
        }
        if($user->token == $token){
            // 用户存在且验证通过
            // 解密邮箱
            $email = decrypt($email);
            $user->user_email = $email;
            $user->token = str_random(32);
            $user->save();
            return view('success.success');
        }
        // 验证失败
        return view('error.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  用户签到
     * @return \Illuminate\Http\Response
     */
    public function qdcreate()
    {
        // 查数据
        $data = Users::where('id',session('user.id'))->first();
        // 判断今日是否已经签到
        if($data->qd == date('Y-m-d',time())){
            return back()->with('error','今日已签到');
        }else{
            // 将当前时间存入数组
            $abc = ['qd'=>date('Y-m-d',time())];
            // 将积分加10
            $abc['jf'] = $data->jf + 10;
            // 修改数据库中数据
            $res = Users::where('id',session('user.id'))->update($abc);
            // 判断数据是否修改成功
            if($res){
                return redirect('/grzx')->with('success','签到成功');
            }else{
                return back()->with('error','签到失败');
            }
        }
        
    }
}
