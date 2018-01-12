@extends('main_layout')

@section('content1')
    <div class="clearfix"></div>

    <li >
        {{--hhhhhhhhh--}}
        <a href="{{url('employee_list/')}}"><i class="fa fa-users">
                <div class="icon-bg bg-pink"></div>
            </i><span class="menu-title">Nhân viên</span></a>
    </li>


    <li  class="active"><a href="{{url('bill_list/')}}"><i class="fa fa-file-o fa-fw ">
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
    <li><a href="/doitac"><i class="fa fa-edit"style="font-size:1.4em">
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
                <li class="hidden"><a href="dashboard.html" >Đơn hàng</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active"style="color: black">Đơn hàng</li>
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
                                                <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                    <ul class="dropdown-menu">
                                                        <li><span data-path="default">Sắp xếp theo</span></li>
                                                        <li><span data-path=".ma" data-order="asc" data-type="number">Mã HD tăng</span></li>
                                                        <li><span data-path=".ma" data-order="desc" data-type="number">Mã HD giảm</span></li>
                                                        <li><span data-path=".gia" data-order="asc" data-type="number" data-default="true">Tổng tiền tăng</span></li>
                                                        <li><span data-path=".gia" data-order="desc" data-type="number">Tổng tiền giảm</span></li>
                                                    </ul>
                                                </div>
                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".ma" type="text" value="" placeholder="Tìm theo mã HĐ" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                </div>
                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".gia" type="text" value="" placeholder="Tìm theo địa chỉ" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
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
                                                        <th style="font-size: 13px;color: white;width: 16%;background-color: #679bc9">MÃ HÓA ĐƠN</th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">NGÀY LẬP</th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">TỔNG TIỀN</th>
                                                        <th style="font-size: 13px;color: white;width:17%;background-color: #679bc9">ĐỊA CHỈ NHẬN</th>
                                                        <th style="font-size: 13px;color: white;width: 17%;background-color: #679bc9">MÃ KHÁCH HÀNG</th>
                                                        <th style="font-size: 13px;color: white;width: 10%;background-color: #679bc9">COUPON</th>
                                                        <th style="font-size: 13px;color: white;width: 12%;background-color: #679bc9">CHỈNH SỮA</th>


                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $count_stt=1?>
                                                    @foreach($nvs as $nv)
                                                        <?php $temp=1?>
                                                        <tr class="tbl-item">

                                                            <td style="color: black;font-size: 13px">{{$count_stt++}}</td>
                                                            <td class="ma"style="color: black;font-size: 13px">{{ $nv->SoHoaDon }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->NgayLapHD }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->TongTien }}</td>
                                                            <td class="gia"style="color: black;font-size: 13px">{{ $nv->DiaChiNhan }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->KhachHang }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->Coupon }}</td>
                                                            <td>
                                                                <!-- Trigger the modal with a button -->

                                                                <!-- Modal -->



                                                                <div class="modal fade" id="{{$nv->SoHoaDon}}" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4  style="color:black;font-weight:bold;font-size: 20px"class="modal-title">CHỈNH SỮA HÓA ĐƠN</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{--<h2 style="margin-left: 50px">Chinh sua hoa don</h2>--}}


                                                                                <form style="margin-left: 50px;color:black" action="{{url('edit_bill/'.$nv->SoHoaDon)}}" method="post">
                                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                                    <div class="form-group">
                                                                                        <label for="SoHoaDon"style="font-weight: bold;font-size: 14px">MÃ HÓA ĐƠN:</label>
                                                                                        <input style="width: 470px"type="SoHoaDon" name="SoHoaDon" class="form-control" id="SoHoaDon" value="{{$nv->SoHoaDon}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="NgayLapHD"style="font-weight: bold;font-size: 14px">NGÀY LẬP:</label>
                                                                                        <input style="width: 470px"type="NgayLapHD" name="NgayLapHD" class="form-control" id="NgayLapHD" value="{{$nv->NgayLapHD}}"placeholder="---" >

                                                                                    </div>

                                                                                    {{--<div class="form-group">--}}
                                                                                        {{--<label for="TongTien"style="font-weight: bold;font-size: 14px">TỔNG TIỀN:</label>--}}
                                                                                        {{--<input style="width: 470px"type="TongTien" name="TongTien" class="form-control" id="TongTien" value="{{$nv->TongTien}}"placeholder="---" >--}}

                                                                                    {{--</div>--}}

                                                                                    <div class="form-group">
                                                                                        <label for="DiaChiNhan"style="font-weight: bold;font-size: 14px">ĐỊA CHỈ NHẬN:</label>
                                                                                        <input style="width: 470px"type="DiaChiNhan" name="DiaChiNhan" class="form-control" id="DiaChiNhan" value="{{$nv->DiaChiNhan}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="KhachHang"style="font-weight: bold;font-size: 14px">MÃ KHÁCH HÀNG:</label>
                                                                                        <input style="width: 470px"type="KhachHang" name="KhachHang" class="form-control" id="KhachHang" value="{{$nv->KhachHang}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="Coupon"style="font-weight: bold;font-size: 14px">COUPON:</label>
                                                                                        <input style="width: 470px"type="Coupon" name="Coupon" class="form-control" id="Coupon" value="{{$nv->Coupon}}"placeholder="---" >

                                                                                    </div>

                                                                                    <button type="submit" name="btnButton" value="rescheduleAction2" class="btn btn-default">Xác nhận</button>


                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                                                    </div>

                                                                                </form>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <form action="{{url('edit_bill/'. $nv->SoHoaDon)}}" method="get">
                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                                    <button type="button" style="border-color: #00ba47" name="btnButton" class="btn btn-default" data-toggle="modal" data-target="#{{$nv->SoHoaDon}}">Cập nhật </button>
                                                                </form>
                                                            </td>


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
