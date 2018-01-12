@extends('layout')

@section('content')
    <h2 style="margin-left: 300px">Insert form</h2>

    <form style="margin-left: 300px"action="insert_employee" method="post">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="name">Name:</label>
            <input style="width: 500px"type="name" name="name" class="form-control" id="name" placeholder="Enter name" >
            <div style="color: red">
                @if($errors->has('name'))<p>{{$errors->first('name')}}</p>@endif
            </div>

        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input style="width: 500px"type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
            <div style="color: red">
                @if($errors->has('email'))<p>{{$errors->first('email')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Phone number:</label>
            <input style="width: 500px"type="phone_number" name="phone_number" class="form-control" id="pwd" placeholder="Enter phone number" >
            <div style="color: red">
                @if($errors->has('phone_number'))<p>{{$errors->first('phone_number')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Address:</label>
            <input style="width: 500px"type="address" name="address" class="form-control" id="pwd" placeholder="Enter address" >
            <div style="color: red">
                @if($errors->has('address'))<p>{{$errors->first('address')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Start day:</label>
            <input style="width: 500px"type="start_day" name="start_day" class="form-control" id="pwd" placeholder="Enter start day" >
            <div style="color: red">
                @if($errors->has('start_day'))<p>{{$errors->first('start_day')}}</p>@endif
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
{{----}}
{{--@extends('main_layout')--}}

{{--@section('content1')--}}

{{--<div class="clearfix"></div>--}}

{{--<li class="active">--}}
    {{--class="fa fa-desktop fa-fw"--}}
{{--<a href="{{url('employee_list/')}}"><i class="fa fa-users">--}}
        {{--<div class="icon-bg bg-pink"></div>--}}
    {{--</i><span class="menu-title">Nhân viên</span></a>--}}
{{--</li>--}}
{{--fa fa-tachometer fa-fw--}}
{{--<li><a href="dashboard.html"><i class="fa fa-database">--}}
            {{--<div class=""></div>--}}
        {{--</i><span class="menu-title">Kho hàng</span></a></li>--}}
{{--fa fa-send-o fa-fw--}}

{{--<li><a href="{{url('bill_list/')}}"><i class="fa fa-file-o fa-fw ">--}}
            {{--<div class="icon-bg bg-green"></div>--}}
        {{--</i><span class="menu-title">Đơn hàng</span></a>--}}

{{--</li>--}}
{{--fa fa-file-o fa-fw--}}
{{--<li><a href="Pages.html"><i class="fa fa-mobile" style="font-size:2.2em;margin-left: -7px">--}}
            {{--<div class=""></div>--}}
        {{--</i><span class="menu-title"style="margin-left: 3px">Sản phẩm</span></a>--}}

{{--</li>--}}
{{--fa fa-edit fa-fw--}}
{{--<li><a href="Forms.html"><i class="fa fa-male"style="font-size:1.7em;margin-left: -3px">--}}
            {{--<div class="icon-bg bg-violet"></div>--}}
        {{--</i><span class="menu-title"style="margin-left: 5px">Khách hàng</span></a>--}}

{{--</li>--}}
{{--fa fa-th-list fa-fw--}}
{{--<li><a href="Tables.html"><i class="fa fa-edit"style="font-size:1.4em">--}}
            {{--<div class="icon-bg bg-blue"></div>--}}
        {{--</i><span class="menu-title">Đối tác</span></a>--}}

{{--</li>--}}
{{--fa fa-database fa-fw--}}
{{--<li><a href="DataGrid.html"><i class="fa fa-bar-chart-o">--}}
            {{--<div class="icon-bg bg-red"></div>--}}
        {{--</i><span class="menu-title">Báo cáo </span></a>--}}

{{--</li>--}}
{{--@endsection--}}
{{--@section('content')--}}

    {{--<div id="page-wrapper">--}}
        {{--<!--BEGIN TITLE & BREADCRUMB PAGE-->--}}
        {{--<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb" style="height: 50px;color: black">--}}
            {{--<div class="page-header pull-left">--}}
                {{--<div class="page-title"></div>--}}
            {{--</div>--}}
            {{--<ol class="breadcrumb page-breadcrumb pull-right"style="margin-top: -5px">--}}
                {{--<li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html"style="color: black">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>--}}
                {{--<li class="hidden"><a href="dashboard.html" >Nhân viên</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>--}}
                {{--<li class="active"style="color: black">Nhân viên</li>--}}
            {{--</ol>--}}
            {{--<div class="clearfix">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!--END TITLE & BREADCRUMB PAGE-->--}}
        {{--<!--BEGIN CONTENT-->--}}
        {{--<div class="page-content"style="margin-top: -25px">--}}
            {{--<div id="tab-general">--}}
                {{--<div class="row mbl">--}}
                    {{--<div class="col-lg-4">--}}

                        {{--<div class="col-md-12">--}}
                            {{--<div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--table--}}
                    {{--<div class="panel panel-blue" style="background:#FFF;">--}}
                        {{--<div class="panel-heading">👫 Danh sách nhân viên</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<table class="table table-hover table-bordered">--}}

                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 4%">STT</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 15%">Họ tên</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 15%">Email</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width:15%">Số điện thoại</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 18%">Địa chỉ</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 16%">Ngày vào làm</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 7%">Edit</td>--}}
                                    {{--<td style="font-size: 13px;color: black;width: 8%">Delete</td>--}}

                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--<?php $count_stt=1?>--}}
                                {{--@foreach($users as $user)--}}
                                    {{--<tr>--}}
                                        {{--<td style="color: black">{{ $count_stt++ }}</td>--}}
                                        {{--<td style="color: black">{{ $user->name }}</td>--}}
                                        {{--<td style="color: black">{{ $user->email }}</td>--}}
                                        {{--<td style="color: black">{{ $user->phone_number }}</td>--}}
                                        {{--<td style="color: black">{{ $user->address }}</td>--}}
                                        {{--<td style="color: black">{{ $user->start_day }}</td>--}}
                                        {{--<td><a href="{{url('edit/'. $user->id)}}">Edit</a></td>--}}
                                        {{--<td>--}}
                                            {{--<form action="{{url('edit/'. $user->id)}}" method="get">--}}
                                                {{--<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">--}}
                                                {{--<button type="submit" name="btnButton" class="btn btn-default">Edit</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--<form action="{{url('Delete/'. $user->id)}}" method="post"onsubmit=" return confirm('Do you want remove this employee?')">--}}
                                                {{--<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">--}}
                                                {{--<button type="submit" name="btnButton" class="btn btn-default">Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
      {{----}}
    {{--</div>--}}
{{--@endsection--}}
