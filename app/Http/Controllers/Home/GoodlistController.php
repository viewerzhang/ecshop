<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Goods;
use App\Http\Model\Admin\GoodsCategory;
use App\Http\Model\Admin\GoodsImgs;
use App\Http\Model\Admin\GoodsType;
use App\Http\Model\Admin\GoodsAttr;
use App\Http\Model\Home\GoodsHistory;

class GoodlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //分类遍历 
      /*  $goods = Goods::where(function($query) use ($req){
            // 分类查找
            if(!empty($req->input('cate_id'))){
                $query->where('cate_id',$req->input('cate_id'));
            }

            //商品名称搜索
            if(!empty($req->input('goods_name'))){
                $query->where('goods_name','like','%'.$req->input('goods_name').'%');
            }

            if(!empty($req->input('id'))){
                //顶级分类查找
                 $data=GoodsCategory::where('pid',$req->input('id'))->get()->pluck('id')->toArray();
                $data[]=$req->input('id');
                $query->whereIn('cate_id',$data);
                
            }
            
        })->get();

        $res = Goods::orderBy('id','desc')->paginate(5);
        dd($res);*/

/*
            $data = Goods::orderBy('id','desc')->where(function($query) use($request){
            //检测 与判断
            
            $goods_name = $request->input('goods_name');
            $cate_id = $request->input('cate_id');
            
            if(!empty($goods_name)){
                $query->where('goods_name','like','%'.$goods_name.'%');
            }
            if(!empty($cate_id)){
                $query->where('cate_id',$cate_id);
            }
            
        })->paginate(15);

        return view('home/goodlist',['data'=>$data,'request'=>$request->all()]);*/


        $data = Goods::where(function($query) use ($request){
            // 分类查找
            if(!empty($request->input('cate_id'))){
                $query->where('cate_id',$request->input('cate_id'));
            }

            //商品名称搜索
            if(!empty($request->input('goods_name'))){
                $query->where('goods_name','like','%'.$req->input('goods_name').'%');
            }

            if(!empty($request->input('id'))){
                //顶级分类查找
                 $data=GoodsCategory::where('cate_id',$request->input('id'))->get()->pluck('id')->toArray();
                $data[]=$request->input('id');
                
                $query->whereIn('cate_id',$data);
                
            }
           $cate_id_hidden = GoodsCategory::where('cate_status','1')->pluck('id');
           $query->whereIn('cate_id',$cate_id_hidden);
        })->paginate(15);

        $res = Goods::orderBy('click_num','desc')->paginate(16);
        // dump($res);
        // dd($data)
        // dd($data[1]);
        return view('home/goods/goodlist',['res'=>$res,'data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
       
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goods = Goods::find($id);

        // 记录用户浏览记录 开始 // 
        if(session('userlogin')){
            try{
                $judge = GoodsHistory::where('uid',session('user.id'))->where('gid',$id)->first();
                if($judge){
                    $zd = GoodsHistory::where('uid',session('user.id'))->max('px');
                    GoodsHistory::where('uid',session('user.id'))->where('gid',$id)->update(['px'=>$zd+1]);
                }else{
                    $zd = GoodsHistory::where('uid',session('user.id'))->max('px');
                    GoodsHistory::insert(['uid'=>session('user.id'),'gid'=>$id,'px'=>$zd+1]);
                }
            }catch(\Exception $err){
                return view('error.index');
            }
        }
        // 记录用户浏览记录 结束 //


        if($goods){
            //点击查看商品详情 则修改goods数据库的goods_show  +1
            $click_num = $goods->click_num;
            $click_num ++;
            Goods::where('id',$id)->update(['click_num'=>$click_num]);
        }

        //查出相同品牌的商品
        $goods_brand = Goods::orderBy('click_num','desc')->where('brand_id',$goods->brand_id)->paginate(4);

        //查出相同类型的商品
        $goods_type = Goods::orderBy('click_num','desc')->where('type_id',$goods->type_id)->paginate(4);

        $type = GoodsAttr::where('type_id',$goods->type_id)->get();

        $goodsimgs = GoodsImgs::where('goods_id',$id)->get();


 
        return view('home/goods/showgoods',['goods'=>$goods,'goodsimgs'=>$goodsimgs,'type'=>$type,'goods_brand'=>$goods_brand,'goods_type'=>$goods_type]);
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

    //获取二级分类
    public function twocate(Request $req)
    {
        return $data=GoodsCategory::getcate($req->input('cate_pid'));
    }  





    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $data = Goods::where(function($query) use ($request){
            // 分类查找
            if(!empty($request->input('cate_id'))){
                $query->where('cate_id',$request->input('cate_id'));
            }

            //商品名称搜索
            if(!empty($request->input('search'))){
                $query->where('goods_name','like','%'.$request->input('search').'%');
            }

            if(!empty($request->input('id'))){
                //顶级分类查找
                 $data=GoodsCategory::where('cate_id',$request->input('id'))->get()->pluck('id')->toArray();
                $data[]=$request->input('id');
                
                $query->whereIn('cate_id',$data);
                
            }
           
        })->paginate(15);
        $res = Goods::orderBy('click_num','desc')->paginate(16);
        // 显示到商品列表页
        return view('home/goods/goodlist',['res'=>$res,'data'=>$data,'request'=>$request->all()]);
    }
}
