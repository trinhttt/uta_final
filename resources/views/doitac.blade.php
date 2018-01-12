@extends('main_layout')

@section('content1')
    <div class="clearfix"></div>

    <li >
        {{--hhhhhhhhh--}}
        <a href="{{url('employee_list/')}}"><i class="fa fa-users">
                <div class="icon-bg bg-pink"></div>
            </i><span class="menu-title">Nhân viên</span></a>
    </li>


    <li ><a href="{{url('bill_list/')}}"><i class="fa fa-file-o fa-fw ">
                <div class="icon-bg bg-green"></div>
            </i><span class="menu-title">Đơn hàng</span></a>

    </li>
    {{--fa fa-file-o fa-fw--}}
    <li><a href="{{url('product_list/')}}"><i class="fa fa-mobile" style="font-size:2.2em;margin-left: -7px">
                <div class=""></div>
            </i><span class="menu-title"style="margin-left: 3px">Sản phẩm</span></a>

    </li>
    {{--fa fa-edit fa-fw--}}
    <li><a href="{{url('customer_list/')}}"><i class="fa fa-male"style="font-size:1.7em;margin-left: -3px">
                <div class="icon-bg bg-violet"></div>
            </i><span class="menu-title"style="margin-left: 5px">Khách hàng</span></a>

    </li>
    {{--fa fa-th-list fa-fw--}}
    <li class="active"><a href="/doitac"><i class="fa fa-edit"style="font-size:1.4em">
                <div class="icon-bg bg-blue"></div>
            </i><span class="menu-title">Đối tác</span></a>

    </li>
    {{--fa fa-database fa-fw--}}
    <li><a href="/chart"><i class="fa fa-bar-chart-o">
                <div class="icon-bg bg-red"></div>
            </i><span class="menu-title">Thống kê </span></a>

    </li>
@endsection

@section('content')

    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb" style="height: 50px;color: black">
            <div class="page-header pull-left">
                <div class="page-title"></div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right"style="margin-top: -5px">
                <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html"style="color: black">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="hidden"><a href="dashboard.html" >Đối tác</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active"style="color: black">Đối tác</li>
            </ol>
            <div class="clearfix">
            </div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content"style="margin-top: -45px">

            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>


                    <div class="page-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel"style="margin-left: -15px;width: 103%">
                                    <div class="panel-body">
                                        <div id="grid-layout-table-1" class="box jplist">
                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                            <div class="jplist-panel box panel-top">
                                                <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Trở lại<i class="fa fa-share mls"></i></button>
                                                <div data-control-type="drop-down" data-number="4"data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                    <ul class="dropdown-menu">
                                                        <li><span data-number="1" data-default="true"> 1 dòng/trang</span></li>
                                                        <li><span data-number="4"> 4 dòng/trang</span></li>
                                                        <li><span data-number="10"> 10 dòng/trang</span></li>
                                                        <li><span data-number="all"> Tất cả dòng</span></li>
                                                    </ul>
                                                </div>

                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".ma" type="text" value="" placeholder="Tìm theo tên" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                </div>
                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".gia" type="text" value="" placeholder="Tìm theo TKhoản" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                </div>
                                                <div class="text-filter-box" >
                                                    {{--<div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".gia" type="text" value="" placeholder="Tìm theo lương" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>--}}
                                                </div>
                                                <div data-type="Trang {current}  trên{pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                            </div>
                                            <div class="modal fade" id="123" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4  style="color:black;font-weight:bold;font-size: 20px"class="modal-title">THÊM HÓA ĐƠN</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{--<h2 style="margin-left: 50px">Chinh sua hoa don</h2>--}}





                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box text-shadow">

                                                <table class="demo-tbl"><!--<item>1</item>-->
                                                    <thead>
                                                    <tr>
                                                        <th style="font-size: 13px;color: white;width: 4%;background-color: #679bc9">STT</th>
                                                        <th style="font-size: 13px;color: white;width: 16%;background-color: #679bc9">TÊN ĐỐI TÁC   </th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">ĐIỆN THOẠI</th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">ĐỊA CHỈ</th>
                                                        <th style="font-size: 13px;color: white;width:17%;background-color: #679bc9">SỐ TÀI KHOẢN</th>



                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $count_stt=1?>
                                                    @foreach($nvs as $nv)
                                                        <?php $temp=1?>
                                                        <tr class="tbl-item">

                                                            <td style="color: black;font-size: 13px">{{$count_stt++}}</td>
                                                            <td class="ma"style="color: black;font-size: 13px">{{ $nv->Ten }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->DT }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->DiaChi }}</td>
                                                            <td class="gia"style="color: black;font-size: 13px">{{ $nv->TaiKhoan }}</td>




                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                            <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                            <div class="jplist-panel box panel-bottom">






                                                <div data-type="{start} - {end} của {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                <div data-control-type="pagination" data-number="5"data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--END CONTENT-->
        <!--BEGIN FOOTER-->
    {{--<div id="footer">--}}
    {{--<div class="copyright">--}}
    {{--<a href="https://www.facebook.com/groups/NMCNPM.UTA/">Quản lý cửa hàng điện thoại Uta</a></div>--}}
    {{--</div>--}}
    <!--END FOOTER-->

        <!--END PAGE WRAPPER-->
    </div>
@endsection
