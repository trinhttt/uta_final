<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class DOITAC extends Model
{
    protected $table="DOITAC";
    protected $primaryKey = 'MaDT';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaDT=Input::get('MaDT');
        $Ten=Input::get('Ten');
        $DT=Input::get('DT');
        $DiaChi=Input::get('DiaChi');
        $TaiKhoan=Input::get('TaiKhoan');



        $d=new DOITAC();
        $d->MaDT=$MaDT;
        $d->Ten=$Ten;
        $d->DT=$DT;
        $d->DiaChi=$DiaChi;
        $d->TaiKhoan=$TaiKhoan;

        $d->save();
    }
}
