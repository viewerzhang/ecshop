@extends('layout.admin')
@section('title', '友情链接管理')
@section('title2', '链接列表')
@section('content')
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="/admin/links/create" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
        	<form action="/admin/links" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" placeholder="链接标题" name="title" value="">
	                <i class="glyphicon glyphicon-search bg-blue"></i>
	                <button href="#" class="btn btn-default blue">搜索</button>
	            </span>
			</form>
        </div>
        <table class="table table-striped table-hover table-bordered dataTable no-footer" id="editabledatatable" aria-describedby="editabledatatable_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 161px;">
                        ID
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 150px;">
                        标题
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Points
                    : activate to sort column ascending" style="width: 107px;">
                        外链地址
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1" colspan="1" aria-label="
                    Notes
                    : activate to sort column ascending" style="width: 288px;">
                        logo
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 171px;">
                   	链接描述
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	类型
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	状态
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 288px;">
                   	操作 
                    </th>
                </tr>
            </thead>
            <tbody>
            	            	                <tr class="odd text-center">
                                    <td class="sorting_1">
                        5
                    </td>
                    <td class="">
                         苏宁支付
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.baidu.com')" title="http://www.baidu.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links//uploads/201809291420126280.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        这是个搜索网址
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/5/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('5', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="even text-center">
                                    <td class="sorting_1">
                        12
                    </td>
                    <td class="">
                         苏宁云
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.baidu.com')" title="http://www.baidu.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links//uploads/201809291422147453.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        这是个搜索网址
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/12/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('12', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="odd text-center">
                                    <td class="sorting_1">
                        38
                    </td>
                    <td class="">
                         投资者关系
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.sina.com')" title="http://www.sina.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links//uploads/201809292049474739.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        微博链接
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/38/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('38', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="even text-center">
                                    <td class="sorting_1">
                        46
                    </td>
                    <td class="">
                         法律申明
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.baidu.com')" title="http://www.baidu.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-08/bdc2e6cd4ee39a8e2682ca7289ab7492.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        1565646456654
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/46/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('46', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="odd text-center">
                                    <td class="sorting_1">
                        47
                    </td>
                    <td class="">
                         诚信网站
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://search.szfw.org/cert/l/CX20111018000608000610')" title="http://search.szfw.org/cert/l/CX20111018000608000610">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-24/62e0f3657f069ea3cef0122531720a19.png" alt="" height="25">
                                            </td>
                    <td class="center">
                        诚信网站
                    </td>
                    <td class="center">
                         图片                     </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/47/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('47', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="even text-center">
                                    <td class="sorting_1">
                        50
                    </td>
                    <td class="">
                         新浪
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.baidu.com/')" title="http://www.baidu.com/">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-25/21b3e10c6870fb3a6752a7aabac3516d.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        百度合作
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/50/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('50', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="odd text-center">
                                    <td class="sorting_1">
                        56
                    </td>
                    <td class="">
                         京东
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.jd.com')" title="http://www.jd.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-25/d9df81caf32df268f51b42a651a02256.JPG" alt="" height="25">
                                            </td>
                    <td class="center">
                        111
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/56/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('56', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="even text-center">
                                    <td class="sorting_1">
                        57
                    </td>
                    <td class="">
                         老庆sb
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.sohu.com')" title="http://www.sohu.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-25/912e1df91e5b3dcb7a92513e58344b80.png" alt="" height="25">
                                            </td>
                    <td class="center">
                        111
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/57/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('57', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            	                <tr class="odd text-center">
                                    <td class="sorting_1">
                        58
                    </td>
                    <td class="">
                         哈哈哈哈
                    </td>
                    <td class=" ">
                        <a href="javascript:pros('http://www.sohu.com')" title="http://www.sohu.com">链接地址</a>
                    </td>
                    <td class="center" style="cursor: pointer;" onclick="image($(this).text())">
                                                    <img src="http://www.pgo.com/./static/uploads/links/2018-10-25/26a2cad095dbcaa224d3017ebf0309ae.jpg" alt="" height="25">
                                            </td>
                    <td class="center">
                        111
                    </td>
                    <td class="center">
                         文字                      </td>
                    <td class="center">
                         显示                     </td>
                    <td class="">
                        <a href="/admin/links/58/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del('58', 'http://www.pgo.com/admin/links', '这个外链')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button> 
                    </td>
                </tr>
                            </tbody>
        </table>
        <style>
        	.pagination{
        		float: right;
        	}
        	.DTTTFooter{
        		padding:15px 20px 0px 0px;
        	}
        </style>
        <div class="row DTTTFooter">
            
        </div>
    </div>
</div>
@endsection
