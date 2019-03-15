@extends('layout.home')
@section('content')
        <!--slider area start-->
        <div class="new_slide_mix_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sl_new_contnt">
                            <div class="sl_heading">
                                
                                <h2>{{$data->art_title}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--about our team area start-->
        <section class="about_our_team_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_team_new_head">
                            <h2>{{$data->art_title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all_team_membar">
                        <center>
                            <div class="col-md-10" style="padding-left: 220px;line-height:25px">
                                <div class="team_member_pic">
                                    <img src="/static/admin/images/articles/{{$data->art_img}}" alt="" style="width: 300px"> 
                                </div>
                                <div class="team_new_cntnt" style="text-align : left; letter-spacing:2px"> 
                                    <h3 style="text-align: center;">{{$data->art_author}}</h3>
                                    <h4 style="text-align: center;">{{$data->art_desc}}</h4>
                                    <p ><font size="3px">{!!$data->art_content!!}</font></p>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <!--about our team area end-->

@endsection


