<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\HOADON;
use App\TAIKHOAN;
use Auth;
use Charts;

use Carbon\Carbon;
class HOADONController extends Controller
{
    public function show()
    {
        $nvs=HOADON::all();
        $T='No name';
        foreach (TAIKHOAN::all() as $r)
        {

            if($r['DangNhap']==1)
            {

                $T=$r['TenDN'];
                break;
            }
        }
        return view('bill.bill_list', compact('nvs','T'));
    }



    //Delete info of bill
    function Delete($MaNhanVien)
    {
        $NV = HOADON::find($MaNhanVien);
        if (isset($NV)) {
            $NV->delete();
        }
        return Redirect::to('employee_list');
    }

    //Edit info of bill
    public function getData($SoHoaDon)
    {
        $NV = HOADON::where('SoHoaDon', $SoHoaDon)->first();

        if ($NV == null) {
            return view('404');
        }

        return view('bill_list', compact('NV'));

    }
    public function Action(Request $request, $SoHoaDon)
    {


        if ($request->btnButton== "rescheduleAction2") {
            $NV = HOADON::where('SoHoaDon', $SoHoaDon)->first();
            $NV->SoHoaDon = $request->SoHoaDon;

            $NV->NgayLapHD = $request->NgayLapHD;
          //  $NV->TongTien=$request->TongTien;
            $NV->DiaChiNhan=$request->DiaChiNhan;
            $NV->KhachHang=$request->KhachHang;
            $NV->Coupon=$request->Coupon;
            $NV->save();


            return Redirect::to('bill_list');
        } else {
            return view('404');
        }
    }

}


