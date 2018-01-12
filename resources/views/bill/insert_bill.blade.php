@extends('layout')

@section('content')
    <h2 style="margin-left: 300px">Them hoa don</h2>

    <form style="margin-left: 300px"action="insert_bill" method="post">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="customer_name">Ten khach hang:</label>
            <input style="width: 500px"type="customer_name" name="customer_name" class="form-control"
                   id="customer_name"placeholder="Nhap ten khach hang" >
            <div style="color: red">
                @if($errors->has('customer_name'))<p>{{$errors->first('customer_name')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="phone_num">Phone number:</label>
            <input style="width: 500px"type="phone_num" name="phone_num" class="form-control"
                   id="phone_num" placeholder="Nhap so dien thoai" >
            <div style="color: red">
                @if($errors->has('phone_num'))<p>{{$errors->first('phone_num')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="name_of_pro">Ten san pham:</label>
            <input style="width: 500px"type="name_of_pro" name="name_of_pro" class="form-control"
                   id="name_of_pro" placeholder="Nhap ten san pham" >
            <div style="color: red">
                @if($errors->has('name_of_pro'))<p>{{$errors->first('name_of_pro')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="buying_date">Ngay mua:</label>
            <input style="width: 500px"type="buying_date" name="buying_date" class="form-control"
                   id="buying_date" placeholder="Nhap ngay mua" >
            <div style="color: red">
                @if($errors->has('buying_date'))<p>{{$errors->first('buying_date')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="num_of_pro">So luong san pham:</label>
            <input style="width: 500px"type="num_of_pro" name="num_of_pro" class="form-control"
                   id="num_of_pro" placeholder="Nhap so luong san pham" >
            <div style="color: red">
                @if($errors->has('num_of_pro'))<p>{{$errors->first('num_of_pro')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="price">Tong gia:</label>
            <input style="width: 500px"type="price" name="price" class="form-control" id="price" placeholder="Nhap tong gia" >
            <div style="color: red">
                @if($errors->has('price'))<p>{{$errors->first('price')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="guarantee_period">Thoi gian bao hanh:</label>
            <input style="width: 500px"type="guarantee_period" name="guarantee_period" class="form-control"
                   id="guarantee_period" placeholder="Nhap thoi gian bao hanh" >
            <div style="color: red">
                @if($errors->has('guarantee_period'))<p>{{$errors->first('guarantee_period')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="Diem_tich_luy">Diem tich luy:</label>
            <input style="width: 500px"type="Diem_tich_luy" name="Diem_tich_luy" class="form-control"
                   id="Diem_tich_luy" placeholder="Nhap diem tich luy" >
            <div style="color: red">
                @if($errors->has('Diem_tich_luy'))<p>{{$errors->first('Diem_tich_luy')}}</p>@endif
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
