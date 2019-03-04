<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\Goods;
use App\Http\Model\Admin\GoodsCategory;
use App\Http\Model\Admin\GoodsImgs;
use App\Http\Model\Admin\GoodsType;
use App\Http\Model\Admin\GoodsAttr;

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
           
        })->paginate(15);


        return view('home/goods/goodlist',['data'=>$data,'request'=>$request->all()]);
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

        if($goods){
            //点击查看商品详情 则修改goods数据库的goods_show  +1
            $click_num = $goods->click_num;
            $click_num ++;
            Goods::where('id',$id)->update(['click_num'=>$click_num]);
        }

        //查出相同品牌的商品
        $goods_brand = Goods::orderBy('click_num','desc')->where('brand_id',$goods->brand_id)->get();

        //查出相同类型的商品
        $goods_type = Goods::orderBy('click_num','desc')->where('type_id',$goods->type_id)->get();

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
}