{{--@extends('layout')--}}

{{--@section('content')--}}

    {{--@if(Session::has('success'))--}}

        {{--<div class="row">--}}
            {{--<div style="margin-left: 147px;width: 870px;margin-bottom: -2em">--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{Session::get('success')}}--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--<div class="content_container">--}}
        {{--<h2 class="content_title"style="margin-bottom: 30px;background: #29292b; color: #FFFFFF;width: 870px">👫 Danh sách sản phẩm</h2>--}}
        {{--<table class="edit_group">--}}
        {{--<col width="100px">--}}
        {{--<col width="100px">--}}


        {{--<tbody>--}}
        {{--<tr>--}}
        {{--<th> Nhân viên làm toàn thời gian </th>--}}
        {{--<td>10 Nhân viên</td>--}}

        {{--</tr>--}}
        {{--<tr>--}}
        {{--<th> Nhân viên làm bán thời gian </th>--}}
        {{--<td>10 Nhân viên</td>--}}

        {{--</tr>--}}
        {{--</tbody>--}}
        {{--</table>--}}
        {{--<form action="insert" method="get">--}}
            {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            {{--<h2 class="content_title"style="background: #6f7072; color: #FFFFFF;width: 700px">Liệt kê danh sách</h2>--}}
            {{--<ul class="flex_box">--}}
                {{--<li><a style="margin-bottom: 30px;margin-left: -40px;font-size: large"  href="{{URL::to('/list')}}"><< Trở về trang trước</a></li>--}}
                {{--<li><input type="submit" name="" value="Sữa" class="btn_submit"></li>--}}
                {{--<li><input type="submit" name="" value="Xóa" class="btn_submit"></li>--}}
                {{--<li><button type="submit" name="btnButton"style="width: 150px;margin-bottom: -65px;margin-right: 490px"--}}
                            {{--class="btn btn-default">Thêm sản phẩm</button></li>--}}
            {{--</ul>--}}
        {{--</form>--}}

        {{--<form action="javascript:addNtTraining();" >--}}

            {{--<table id="dataTable5" class="table table-bordered table-condensed">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 6%">STT</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 13%">Tên Sản Phẩm</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 13%">Hãng sản xuất</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width:11%">Ngày nhập</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 10%">Giá nhập </th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 10%">Gía bán</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 19%">Thông số kỹ thuật</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 6%">Edit</th>--}}
                    {{--<th style="font-size: 13px;background-color:#b8daf9;width: 8%">Delete</th>--}}

                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<?php $count_stt=1?>--}}

                {{--<tr>--}}
                    {{--<td style="font-size: 13px">1</td>--}}
                    {{--<td style="font-size: 13px">NOKIA 8</td>--}}
                    {{--<td style="font-size: 13px">Nokia</td>--}}
                    {{--<td style="font-size: 13px">09/09/2017</td>--}}
                    {{--<td style="font-size: 13px">10.000.000</td>--}}
                    {{--<td style="font-size: 13px">10.400.000</td>--}}
                    {{--<td><a href="{{url('edit/'. $user->id)}}">Edit</a></td>--}}
                    {{--<td style="font-size: 13px">Super AMOLED 5.7 inch độ phân giải QHD, máy ảnh chính 24 MP,--}}
                        {{--camera selfie đạt 12 MP, hệ điều hành Android 7.0 Nougat, bộ nhớ trong là 64 GB</td>--}}
                    {{--<td style="font-size: 13px"> <button type="submit" name="btnButton" class="btn btn-default">Edit</button></td>--}}
                    {{--<td style="font-size: 13px"> <button type="submit" name="btnButton" class="btn btn-default">Delete</button></td>--}}
                {{--</tr>--}}

                {{--<tr>--}}
                    {{--<td style="font-size: 13px">2</td>--}}
                    {{--<td style="font-size: 13px">Xperia™ XZs</td>--}}
                    {{--<td style="font-size: 13px">Sony</td>--}}
                    {{--<td style="font-size: 13px">08/08/2016</td>--}}
                    {{--<td style="font-size: 13px">12.500.000</td>--}}
                    {{--<td style="font-size: 13px">13.000.000</td>--}}
                    {{--<td><a href="{{url('edit/'. $user->id)}}">Edit</a></td>--}}
                    {{--<td style="font-size: 13px">RAM 4 GB--}}
                        {{--Bộ nhớ trong eMMC 64 GB1, Bộ xử lý Qualcomm® Snapdragon™ 820, Kháng nước (IP65/68)2</td>--}}
                    {{--<td style="font-size: 13px">--}}
                        {{--<button type="submit" name="btnButton" class="btn btn-default">Edit</button>--}}
                    {{--</td>--}}
                    {{--<td style="font-size: 13px"> <button type="submit" name="btnButton" class="btn btn-default">Delete</button></td>--}}
                {{--</tr>--}}

                {{--</tbody>--}}
            {{--</table>--}}

            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<link href="css/style.css" media="screen" rel="stylesheet" type="text/css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>--}}
    {{--<script type="text/javascript" charset="utf8" src="/js/dataables.min.js"></script>--}}
    {{--<script src="{{asset("/js/datatables.min.js")}}"></script>--}}

    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$('#dataTable5').dataTable({--}}
                {{--paging: false,--}}
            {{--});--}}
            {{--$('#dataTable5').removeAttr('style');--}}

        {{--});--}}
        {{--function deleteNtTraining(id) {--}}
            {{--$.ajaxSetup({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('input[name="_token"]').val()--}}
                {{--}--}}
            {{--});--}}
            {{--$.ajax({--}}
                {{--type: 'POST',--}}
                {{--//url: '/ks303/delete/' + id,--}}
                {{--url: '/deleteNtTraining/' + id,--}}
                {{--data: null,--}}
                {{--dataType: 'JSON',--}}
                {{--//beforeSend: showLoading()--}}
            {{--}).done(function (response) {--}}
                {{--// hideLoading();--}}
                {{--loadDataTable(response);--}}
            {{--});--}}
        {{--}--}}
        {{--function loadDataTable(response) {--}}
            {{--var table = $('#dataTable5').DataTable();--}}
            {{--table.clear().draw();--}}
            {{--if (response.length != 0) {--}}
                {{--$.each(response, function (i, ntTrangning) {--}}
                    {{--var link = '<a href="javascript:deleteNtTraining(' + user.id + ');" onclick="confirm(\'delete?\')">Delete</a>';--}}
                    {{--var row = [user.id, user.name, user.email,user.phone_number,user.address,user.start_day, link];--}}
                    {{--table.row.add(row).draw(false);--}}
                {{--});--}}
            {{--}--}}
        {{--}--}}

    {{--</script>--}}
{{--@endsection--}}
@extends('layout')

@section('content')

    @if(Session::has('success'))

        <div class="row">
            <div style="margin-left: 147px;width: 870px;margin-bottom: -2em">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>

            </div>
        </div>
    @endif
    <div class="content_container">
        <h2 class="content_title"style="margin-bottom: 30px;background: #29292b; color: #FFFFFF;width: 870px">👫 Danh sách khach hang</h2>
        {{--<table class="edit_group">--}}
        {{--<col width="100px">--}}
        {{--<col width="100px">--}}


        {{--<tbody>--}}
        {{--<tr>--}}
        {{--<th> Nhân viên làm toàn thời gian </th>--}}
        {{--<td>10 Nhân viên</td>--}}

        {{--</tr>--}}
        {{--<tr>--}}
        {{--<th> Nhân viên làm bán thời gian </th>--}}
        {{--<td>10 Nhân viên</td>--}}

        {{--</tr>--}}
        {{--</tbody>--}}
        {{--</table>--}}
        <form action="insert" method="get">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {{--<h2 class="content_title"style="background: #6f7072; color: #FFFFFF;width: 700px">Liệt kê danh sách</h2>--}}
            <ul class="flex_box">
                <li><a style="margin-bottom: 30px;margin-left: -40px;font-size: large"  href="{{URL::to('/list')}}"><< Trở về trang trước</a></li>
                {{--<li><input type="submit" name="" value="Sữa" class="btn_submit"></li>--}}
                {{--<li><input type="submit" name="" value="Xóa" class="btn_submit"></li>--}}
                <li><button type="submit" name="btnButton"style="width: 150px;margin-bottom: -65px;margin-right: 490px"
                            class="btn btn-default">Thêm</button></li>
            </ul>
        </form>

        {{--<form action="javascript:addNtTraining();" >--}}

        <table id="dataTable5" class="table table-bordered table-condensed">
            <thead>
            <tr>
                <th style="font-size: 13px;background-color:#b8daf9;width: 6%">STT</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 13%">Ten Khach Hang </th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 13%">So dien thoai</th>
                <th style="font-size: 13px;background-color:#b8daf9;width:10%">Email</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 10%">Dia chi </th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 10%">So lan mua</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 13%">Diem tich luy</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 6%">Edit</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 8%">Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php $count_stt=1?>

            <tr>
                <td style="font-size: 13px">1</td>
                <td style="font-size: 13px">Minh Tam</td>
                <td style="font-size: 13px">0168686868</td>
                <td style="font-size: 13px">minhtam@gmai.com</td>
                <td style="font-size: 13px">Quan4, TPHCM</td>
                <td style="font-size: 13px">2</td>
                {{--<td><a href="{{url('edit/'. $user->id)}}">Edit</a></td>--}}
                <td style="font-size: 13px">11</td>
                <td style="font-size: 13px"> <button type="submit" name="btnButton" class="btn btn-default">Edit</button></td>
                <td style="font-size: 13px"> <button type="submit" name="btnButton" class="btn btn-default">Delete</button></td>
            </tr>


            </tbody>
        </table>

        </tbody>
        </table>
    </div>
    </div>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    {{--<script type="text/javascript" charset="utf8" src="/js/dataables.min.js"></script>--}}
    <script src="{{asset("/js/datatables.min.js")}}"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable5').dataTable({
                paging: false,
            });
            $('#dataTable5').removeAttr('style');

        });
        function deleteNtTraining(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                type: 'POST',
                //url: '/ks303/delete/' + id,
                url: '/deleteNtTraining/' + id,
                data: null,
                dataType: 'JSON',
                //beforeSend: showLoading()
            }).done(function (response) {
                // hideLoading();
                loadDataTable(response);
            });
        }
        function loadDataTable(response) {
            var table = $('#dataTable5').DataTable();
            table.clear().draw();
            if (response.length != 0) {
                $.each(response, function (i, ntTrangning) {
                    var link = '<a href="javascript:deleteNtTraining(' + user.id + ');" onclick="confirm(\'delete?\')">Delete</a>';
                    var row = [user.id, user.name, user.email,user.phone_number,user.address,user.start_day, link];
                    table.row.add(row).draw(false);
                });
            }
        }

    </script>
@endsection