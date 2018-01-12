<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\NHANVIEN;
use App\TAIKHOAN;
use Auth;
use Charts;

use Carbon\Carbon;
class NHANVIENController extends Controller
{
    public function show()
    {
        $nvs=NHANVIEN::all();
        $T='No name';
        $LoaiTk='';
        foreach (TAIKHOAN::all() as $r)
        {

            if($r['DangNhap']==1)
            {

                $T=$r['TenDN'];
                $LoaiTk=$r['LoaiTK'];
                 break;
            }
        }

        return view('employee.employee_list', compact('nvs','T','LoaiTk'));

    }

    public function Insert()
    {

        $data=Input::except(array('_token'));
        $rule=array(
            'MaNhanVien'=>'required',
            'HoSo'=>'required',
            'ChucVu'=>'required',
            'Luong'=>'required',
            'TaiKhoanNV'=>'required',

        );

        $validator=Validator::make($data,$rule);

        if($validator->fails())
        {
            return Redirect::to('employee_list')->withErrors($validator);
        }else{
            NHANVIEN::formstore(Input::except('_token'));

            return Redirect::to('employee_list')->with('success','successfully inserted');
        }


    }


    //Delete info of bill
    function Delete($MaNhanVien)
    {
        $NV = NHANVIEN::find($MaNhanVien);
        if (isset($NV)) {
            $NV->delete();
        }
        return Redirect::to('employee_list');
    }

    //Edit info of bill
    public function getData($MaNhanVien)
    {
        $NV = NHANVIEN::where('MaNhanVien', $MaNhanVien)->first();

        if ($NV == null) {
            return view('404');
        }

        return view('employee.employee_list', compact('NV'));

    }
    public function Action(Request $request, $MaNhanVien)
    {

        if ($request->btnButton== "rescheduleAction2") {
            $NV = NHANVIEN::where('MaNhanVien', $MaNhanVien)->first();
//                    var_dump($request->NgayLapHD);
//        exit();
           // $NV->MaNhanVien = $request->MaNhanVien;

            $NV->HoSo = $request->HoSo;
            $NV->ChucVu=$request->ChucVu;
            $NV->Luong=$request->Luong;
            $NV->TaiKhoanNV=$request->TaiKhoanNV;

            $NV->save();


            return Redirect::to('employee_list');
        } else {
            return view('404');
        }
    }

}
