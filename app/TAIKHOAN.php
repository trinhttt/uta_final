<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TAIKHOAN extends Model
{
    public $table="TAIKHOAN";
    public $primaryKey = 'Email';
    public $timestamps = false;

    public static function formstore($data)
    {

        $email=Input::get('Email');
        $DangNhap=Input::get('DangNhap');
        $pass=Hash::make(Input::get('Matkhau'));

        $register=new TAIKHOAN();
        $register->Email=$email;
        $register->MatKhau=$pass;
        $register->DangNhap=$DangNhap;
        $register->LoaiTK='3';
        $register->save();
    }
}
