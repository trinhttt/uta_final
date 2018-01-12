<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class KHACHHANG extends Model
{
    protected $table="KHACHHANG";
    protected $primaryKey = 'MaKhachHang';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaKhachHang=Input::get('MaKhachHang');//INT
        $HoSo=Input::get('HoSo');//INT
        $TaiKhoanKH=Input::get('TaiKhoanKH');//VARCHAR
        $LoaiKH=Input::get('LoaiKH');//INT




        $NV=new KHACHHANG();
        $NV->MaKhachHang=$MaKhachHang;
        $NV->HoSo=$HoSo;
        $NV->TaiKhoanKH=$TaiKhoanKH;
        $NV->LoaiKH=$LoaiKH;

        $NV->save();
    }
}
