<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class HOADON extends Model
{
    protected $table="HOADON";
    protected $primaryKey = 'SoHoaDon';
    public $timestamps = false;
    public static function formstore($data)
    {
        $SoHoaDon=Input::get('SoHoaDon');
        $NgayLapHD=Input::get('NgayLapHD');
        $TongTien=Input::get('TongTien');
        $DiaChiNhan=Input::get('DiaChiNhan');
        $KhachHang=Input::get('KhachHang');
        $Coupon=Input::get('Coupon');


        $bill=new HOADON();
        $bill->SoHoaDon=$SoHoaDon;
        $bill->NgayLapHD=$NgayLapHD;
        $bill->TongTien=$TongTien;
        $bill->DiaChiNhan=$DiaChiNhan;
        $bill->KhachHang=$KhachHang;
        $bill->Coupon=$Coupon;
        $bill->save();
    }
}
