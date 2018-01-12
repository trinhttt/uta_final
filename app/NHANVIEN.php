<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class NHANVIEN extends Model
{
    protected $table="NHANVIEN";
    protected $primaryKey = 'MaNhanVien';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaNhanVien=Input::get('MaNhanVien');
        $HoSo=Input::get('HoSo');
        $ChucVu=Input::get('ChucVu');
        $Luong=Input::get('Luong');
        $TaiKhoanNV=Input::get('TaiKhoanNV');



        $NV=new NHANVIEN();
        $NV->MaNhanVien=$MaNhanVien;
        $NV->HoSo=$HoSo;
        $NV->ChucVu=$ChucVu;
        $NV->Luong=$Luong;
        $NV->TaiKhoanNV=$TaiKhoanNV;

        $NV->save();
    }
}
