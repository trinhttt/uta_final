@extends('layout')

@section('content')
<h2 style="margin-left: 300px">Đăng ký tài khoản mới</h2>

@if(Session::has('success'))

 <div class="row" style="width: 575px;margin-left: 260px">
     <div class="col-md-12">
         <div class="alert alert-success">
             {{Session::get('success')}}
         </div>

     </div>
 </div>

@endif
<form action="register_action" method="post" style="margin-left: 300px">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    {{--<div class="form-group">--}}
        {{--<label for="name">Name:</label>--}}
        {{--<input style="width: 500px"type="name" name="username" class="form-control" id="name" placeholder="Enter name" >--}}
        {{--<div style="color: red">--}}
            {{--@if($errors->has('username'))<p>{{$errors->first('username')}}</p>@endif--}}
        {{--</div>--}}

    {{--</div>--}}
    <div class="form-group">
        <label for="TenDN">Tên đăng nhập:</label>
        <input style="width: 500px"type="name" name="TenDN" class="form-control" id="TenDN" placeholder="Enter username" >
        <div style="color: red">
            @if($errors->has('TenDN'))<p>{{$errors->first('TenDN')}}</p>@endif
        </div>
    </div>
    <div class="form-group">
        <label for="Email">Email:</label>
        <input style="width: 500px"type="email" name="Email" class="form-control" id="Email" placeholder="Enter email" >
        <div style="color: red">
            @if($errors->has('Email'))<p>{{$errors->first('Email')}}</p>@endif
        </div>
    </div>

    <div class="form-group">
        <label for="MatKhau">Mật khẩu:</label>
        <input style="width: 500px"type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Enter password" >
        <div style="color: red">
        @if($errors->has('MatKhau'))<p>{{$errors->first('MatKhau')}}</p>@endif
        </div>
    </div>

    <div class="form-group">
        <label for="cpassword">Nhập lại mật khẩu:</label>
        <input style="width: 500px"type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm password" >
        <div style="color: red">
        @if($errors->has('cpassword'))<p>{{$errors->first('cpassword')}}</p>@endif
        </div>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="remember">Lưu tài khoản</label>
    </div>
    <button type="submit" class="btn btn-default">Xác nhận</button>
</form>

@endsection
