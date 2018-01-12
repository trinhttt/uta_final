@extends('layout')

@section('content')

    <h2 style="margin-left: 280px">Đăng nhập:</h2>

    @if(Session::has('error'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            </div>
        </div>
    @endif

    <form action="login_check" method="post" style="margin-left: 280px">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group ">
            <label for="Email">Nhập email:</label>
            <input style="width: 500px"type="email" name="Email" class="form-control" id="Email" placeholder="Enter email" >
            <div style="color: red">
            @if($errors->has('Email'))<p>{{$errors->first('Email')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="MatKhau">Nhập mật khẩu:</label>
            <input style="width: 500px"type="password" name="MatKhau" class="form-control" id="MatKhau" placeholder="Enter password" >
            <div style="color: red">
            @if($errors->has('MatKhau'))<p>{{$errors->first('MatKhau')}}</p>@endif
            </div>
        </div>

        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Lưu tài khoản</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
