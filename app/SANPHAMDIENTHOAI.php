<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class SANPHAMDIENTHOAI extends Model
{
//create table SANPHAMDIENTHOAI(
//MaSP int auto_increment not null primary key,
//TenDienThoai varchar(100)not null,
//HangSX int not null,
//ThongSoKyThuat int,

//SoLuongConLai int check(SoLuongConLai>=0),
//Mausac varchar(10),
//GiaGoc int check(DonGia>=0),
//GiaGiam int,
//KhuyenMai int,
//UuDai int,
//Mota_urlImage varchar(300),
//DacDiemChiTiet_urlImage varchar(300)


    protected $table="SANPHAMDIENTHOAI";
    protected $primaryKey = 'MaSP';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaSP=Input::get('MaSP');
        $TenDienThoai=Input::get('TenDienThoai');
        $HangSX=Input::get('HangSX');
        $ThongSoKyThuat=Input::get('ThongSoKyThuat');
        $SoLuongConLai=Input::get('SoLuongConLai');
        $Mausac=Input::get('Mausac');
        $GiaGoc=Input::get('GiaGoc');
        $GiaGiam=Input::get('GiaGiam');
        $KhuyenMai=Input::get('KhuyenMai');
        $UuDai=Input::get('UuDai');
        $Mota_urlImage=Input::get('Mota_urlImage');
        $DacDiemChiTiet_urlImage=Input::get('DacDiemChiTiet_urlImage');

        $NV=new SANPHAMDIENTHOAI();
        $NV->MaSP=$MaSP;
        $NV->TenDienThoai=$TenDienThoai;
        $NV->HangSX=$HangSX;
        $NV->ThongSoKyThuat=$ThongSoKyThuat;
        $NV->SoLuongConLai=$SoLuongConLai;
        $NV->Mausac=$Mausac;
        $NV->GiaGoc=$GiaGoc;
        $NV->GiaGiam=$GiaGiam;
        $NV->KhuyenMai=$KhuyenMai;
        $NV->UuDai=$UuDai;
        $NV->Mota_urlImage=$Mota_urlImage;
        $NV->DacDiemChiTiet_urlImage=$DacDiemChiTiet_urlImage;


        $NV->save();
    }
}
