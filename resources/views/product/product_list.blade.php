@extends('main_layout')

@section('content1')
    <div class="clearfix"></div>

    <li  >
        {{--class="fa fa-desktop fa-fw"--}}
        <a href="{{url('employee_list/')}}"><i class="fa fa-users">
                <div class="icon-bg bg-pink"></div>
            </i><span class="menu-title">Nhân viên</span></a>
    </li>


    <li><a href="{{url('bill_list/')}}"><i class="fa fa-file-o fa-fw ">
                <div class="icon-bg bg-green"></div>
            </i><span class="menu-title">Đơn hàng</span></a>

    </li>
    {{--fa fa-file-o fa-fw--}}
    <li class="active"><a href="{{url('product_list/')}}"><i class="fa fa-mobile" style="font-size:2.2em;margin-left: -7px">
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
            </i><span class="menu-title">Thống kê</span></a>

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
                <li class="hidden"><a href="dashboard.html" >Sản phẩm</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active"style="color: black">Sản phẩm</li>
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
                                                        <li><span data-path=".ma" data-order="asc" data-type="number">Mã SP tăng</span></li>
                                                        <li><span data-path=".ma" data-order="desc" data-type="number">Mã SP giảm</span></li>
                                                        <li><span data-path=".gia" data-order="asc" data-type="number">Giá gốc tăng</span></li>
                                                        <li><span data-path=".gia" data-order="desc" data-type="number">Giá gốc giảm</span></li>
                                                    </ul>
                                                </div>
                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".chuc" type="text" value="" placeholder="Tìm theo tên ĐT" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                </div>
                                                <div class="text-filter-box">
                                                    <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".gia" type="text" value="" placeholder="Tìm theo giá gốc" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                </div>
                                                <div data-type="Trang {current}  trên{pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                            </div>
                                            <div class="modal fade" id="1234" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4  style="color:black;font-weight:bold;font-size: 20px"class="modal-title">THÊM SẢN PHẨM</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            {{--<h2 style="margin-left: 50px">Chinh sua hoa don</h2>--}}


                                                            <form style="margin-left: 50px;color:black" action="{{url('insert_product/')}}" method="post">
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                <div class="form-group">
                                                                    <label for="MaSP"style="font-weight: bold;font-size: 14px">MÃ SẢN PHẨM:</label>
                                                                    <input style="width: 470px"type="MaSP" name="MaSP" class="form-control" id="MaSP" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="TenDienThoai"style="font-weight: bold;font-size: 14px"> TÊN ĐIỆN THOẠI:</label>
                                                                    <input style="width: 470px"type="TenDienThoai" name="TenDienThoai" class="form-control" id="TenDienThoai" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="HangSX"style="font-weight: bold;font-size: 14px">HÃNG SẢN XUẤT:</label>
                                                                    <input style="width: 470px"type="HangSX" name="HangSX" class="form-control" id="HangSX" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="ThongSoKyThuat"style="font-weight: bold;font-size: 14px">THÔNG SỐ KỸ THUẬT:</label>
                                                                    <input style="width: 470px"type="ThongSoKyThuat" name="ThongSoKyThuat" class="form-control" id="ThongSoKyThuat" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="SoLuongConLai"style="font-weight: bold;font-size: 14px">SỐ LƯỢNG CÒN LẠI:</label>
                                                                    <input style="width: 470px"type="SoLuongConLai" name="SoLuongConLai" class="form-control" id="SoLuongConLai" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="Mausac"style="font-weight: bold;font-size: 14px">MÀU SẮC:</label>
                                                                    <input style="width: 470px"type="Mausac" name="Mausac" class="form-control" id="Mausac" placeholder="---" >

                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="GiaGoc"style="font-weight: bold;font-size: 14px">GIÁ GỐC:</label>
                                                                    <input style="width: 470px"type="GiaGoc" name="GiaGoc" class="form-control" id="GiaGoc" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="GiaGiam"style="font-weight: bold;font-size: 14px">GIÁ KHUYẾN MÃI:</label>
                                                                    <input style="width: 470px"type="GiaGiam" name="GiaGiam" class="form-control" id="GiaGiam" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="KhuyenMai"style="font-weight: bold;font-size: 14px">ƯU ĐÃI:</label>
                                                                    <input style="width: 470px"type="KhuyenMai" name="KhuyenMai" class="form-control" id="KhuyenMai" placeholder="---" >

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="UuDai"style="font-weight: bold;font-size: 14px">HÌNH MÔ TẢ:</label>
                                                                    <input style="width: 470px"type="UuDai" name="UuDai" class="form-control" id="UuDai" placeholder="---" >

                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="Mota_urlImage"style="font-weight: bold;font-size: 14px">ĐẶC ĐIỂM CHI TIẾT:</label>
                                                                    <input style="width: 470px"type="Mota_urlImage" name="Mota_urlImage" class="form-control" id="Mota_urlImage" placeholder="---" >

                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="DacDiemChiTiet_urlImage"style="font-weight: bold;font-size: 14px">TÀI KHOẢN:</label>
                                                                    <input style="width: 470px"type="DacDiemChiTiet_urlImage" name="DacDiemChiTiet_urlImage" class="form-control" id="DacDiemChiTiet_urlImage" placeholder="---" >

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
                                            @if($LoaiTk==1)
                                            <form action="{{url('insert_product')}}" method="get">
                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                <button style="border-color:#23acff;margin-left: 650px;margin-top: 10px;margin-bottom: -20px" type="button" name="btnButton" class="btn btn-default" data-toggle="modal" data-target="#1234">THÊM SẢN PHẨM</button>
                                            </form>
                                            @endif
                                            <div class="box text-shadow">

                                                <table class="demo-tbl"><!--<item>1</item>-->
                                                    <thead>

                                                    <tr>
                                                        <th style="font-size: 13px;color: white;width: 4%;background-color: #679bc9">STT</th>
                                                        <th style="font-size: 13px;color: white;width: 16%;background-color: #679bc9">MÃ SẢN PHẨM</th>
                                                        <th style="font-size: 13px;color: white;width: 16%;background-color: #679bc9">TÊN ĐIỆN THOẠI</th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">GIÁ GỐC</th>
                                                        <th style="font-size: 13px;color: white;width:13%;background-color: #679bc9">GIÁ ĐÃ GIẢM</th>
                                                        <th style="font-size: 13px;color: white;width: 13%;background-color: #679bc9">KHUYẾN MÃI</th>
                                                        <th style="font-size: 13px;color: white;width: 15%;background-color: #679bc9">SỐ LƯỢNG CÒN LẠI</th>
                                                        <th style="font-size: 13px;color: white;width: 12%;background-color: #679bc9">CHỈNH SỮA</th>
                                                        @if($LoaiTk==1)
                                                        <th style="font-size: 13px;color: white;width: 10%;background-color: #679bc9">XÓA</th>
                                                            @endif

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $count_stt=1?>
                                                    @foreach($nvs as $nv)
                                                        <?php $temp=1?>
                                                        <tr class="tbl-item">

                                                            <td style="color: black;font-size: 13px">{{$count_stt++}}</td>
                                                            <td class="ma"style="color: black;font-size: 13px">{{ $nv->MaSP }}</td>
                                                            <td class="chuc"style="color: black;font-size: 13px">{{ $nv->TenDienThoai }}</td>
                                                            <td class="gia"style="color: black;font-size: 13px">{{ $nv->GiaGoc }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->GiaGiam }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->KhuyenMai }}</td>
                                                            <td style="color: black;font-size: 13px">{{ $nv->SoLuongConLai }}</td>
                                                            <td>
                                                                <!-- Trigger the modal with a button -->

                                                                <!-- Modal -->



                                                                <div class="modal fade" id="{{$nv->MaSP}}" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4  style="color:black;font-weight:bold;font-size: 20px"class="modal-title">CHỈNH SỮA THÔNG TIN SẢN PHẨM</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{--<h2 style="margin-left: 50px">Chinh sua hoa don</h2>--}}

                                                                                {{--'MaSP'=>'required',--}}
                                                                                {{--'TenDienThoai'=>'required',--}}
                                                                                {{--'HangSX'=>'required',--}}
                                                                                {{--'ThongSoKyThuat'=>'required',--}}
                                                                                {{--'SoLuongConLai'=>'required',--}}

                                                                                {{--'Mausac'=>'required',--}}
                                                                                {{--'GiaGoc'=>'required',--}}
                                                                                {{--'GiaGiam'=>'required',--}}
                                                                                {{--'KhuyenMai'=>'required',--}}
                                                                                {{--'UuDai'=>'required',--}}
                                                                                {{--'Mota_urlImage'=>'required',--}}
                                                                                {{--'DacDiemChiTiet_urlImage'=>'required',--}}
                                                                                <form style="margin-left: 50px;color:black" action="{{url('edit_product/'.$nv->MaSP)}}" method="post">
                                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                                    <div class="form-group">
                                                                                        <label for="MaSP"style="font-weight: bold;font-size: 14px">MÃ SẢN PHẨM:</label>
                                                                                        <input style="width: 470px"type="MaSP" name="MaSP" class="form-control" id="MaSP" value="{{$nv->MaSP}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="TenDienThoai"style="font-weight: bold;font-size: 14px"> TÊN ĐIỆN THOẠI:</label>
                                                                                        <input style="width: 470px"type="TenDienThoai" name="TenDienThoai" class="form-control" id="TenDienThoai" value="{{$nv->TenDienThoai}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="HangSX"style="font-weight: bold;font-size: 14px">HÃNG SẢN XUẤT:</label>
                                                                                        <input style="width: 470px"type="HangSX" name="HangSX" class="form-control" id="HangSX" value="{{$nv->HangSX}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="ThongSoKyThuat"style="font-weight: bold;font-size: 14px">THÔNG SỐ KỸ THUẬT:</label>
                                                                                        <input style="width: 470px"type="ThongSoKyThuat" name="ThongSoKyThuat" class="form-control" id="ThongSoKyThuat" value="{{$nv->ThongSoKyThuat}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="SoLuongConLai"style="font-weight: bold;font-size: 14px">SỐ LƯỢNG CÒN LẠI:</label>
                                                                                        <input style="width: 470px"type="SoLuongConLai" name="SoLuongConLai" class="form-control" id="SoLuongConLai" value="{{$nv->SoLuongConLai}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="Mausac"style="font-weight: bold;font-size: 14px">MÀU SẮC:</label>
                                                                                        <input style="width: 470px"type="Mausac" name="Mausac" class="form-control" id="Mausac" value="{{$nv->Mausac}}"placeholder="---" >

                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="GiaGoc"style="font-weight: bold;font-size: 14px">GIÁ GỐC:</label>
                                                                                        <input style="width: 470px"type="GiaGoc" name="GiaGoc" class="form-control" id="GiaGoc" value="{{$nv->GiaGoc}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="GiaGiam"style="font-weight: bold;font-size: 14px">GIÁ KHUYẾN MÃI:</label>
                                                                                        <input style="width: 470px"type="GiaGiam" name="GiaGiam" class="form-control" id="GiaGiam" value="{{$nv->GiaGiam}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="KhuyenMai"style="font-weight: bold;font-size: 14px">ƯU ĐÃI:</label>
                                                                                        <input style="width: 470px"type="KhuyenMai" name="KhuyenMai" class="form-control" id="KhuyenMai" value="{{$nv->KhuyenMai}}"placeholder="---" >

                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="UuDai"style="font-weight: bold;font-size: 14px">HÌNH MÔ TẢ:</label>
                                                                                        <input style="width: 470px"type="UuDai" name="UuDai" class="form-control" id="UuDai" value="{{$nv->UuDai}}"placeholder="---" >

                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="Mota_urlImage"style="font-weight: bold;font-size: 14px">ĐẶC ĐIỂM CHI TIẾT:</label>
                                                                                        <input style="width: 470px"type="Mota_urlImage" name="Mota_urlImage" class="form-control" id="Mota_urlImage" value="{{$nv->Mota_urlImage}}"placeholder="---" >

                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="DacDiemChiTiet_urlImage"style="font-weight: bold;font-size: 14px">TÀI KHOẢN:</label>
                                                                                        <input style="width: 470px"type="DacDiemChiTiet_urlImage" name="DacDiemChiTiet_urlImage" class="form-control" id="DacDiemChiTiet_urlImage" value="{{$nv->DacDiemChiTiet_urlImage}}"placeholder="---" >

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




                                                                <form action="{{url('edit_product/'. $nv->MaSP)}}" method="get">
                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                                    <button type="button" style="border-color: #00ba47" name="btnButton" class="btn btn-default" data-toggle="modal" data-target="#{{$nv->MaSP}}">Cập nhật </button>
                                                                </form>
                                                            </td>
                                                            @if($LoaiTk==1)
                                                            <td>

                                                                <form action="{{url('Delete_product/'. $nv->MaSP)}}" method="post"onsubmit=" return confirm('Do you want remove this product?')">
                                                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                                                    <button type="submit" style="border-color: #ff8484" name="btnButton" class="btn btn-default">Xóa</button>
                                                                </form>

                                                            </td>
                                                        @endif
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
