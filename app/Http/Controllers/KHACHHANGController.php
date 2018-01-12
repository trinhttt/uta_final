<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\KHACHHANG;
use App\TAIKHOAN;
use Auth;
use Charts;

use Carbon\Carbon;
class KHACHHANGController extends Controller
{

    public function show()
    {
        $nvs=KHACHHANG::all();
        $T='No name';
        foreach (TAIKHOAN::all() as $r)
        {

            if($r['DangNhap']==1)
            {

                $T=$r['TenDN'];
                break;
            }
        }
        return view('customer.customer_list', compact('nvs','T'));
    }

    public function Insert()
    {

        $data=Input::except(array('_token'));
        $rule=array(
            'MaKhachHang'=>'required',
            'HoSo'=>'required',
            'TaiKhoanKH'=>'required',
            'LoaiKH'=>'required',

        );

        $validator=Validator::make($data,$rule);

        if($validator->fails())
        {
            return Redirect::to('customer_list')->withErrors($validator);
        }else{
            KHACHHANG::formstore(Input::except('_token'));

            return Redirect::to('customer_list')->with('success','successfully inserted');
        }


    }


    //Delete info of bill
    function Delete($MaKhachHang)
    {
        $NV = KHACHHANG::find($MaKhachHang);
        if (isset($NV)) {
            $NV->delete();
        }
        return Redirect::to('customer_list');
    }

    //Edit info of bill
    public function getData($MaKhachHang)
    {
        $NV = KHACHHANG::where('MaKhachHang', $MaKhachHang)->first();

        if ($NV == null) {
            return view('404');
        }

        return view('customer.customer_list', compact('NV'));

    }
    public function Action(Request $request, $MaKhachHang)
    {

        if ($request->btnButton== "rescheduleAction2") {
            $NV = KHACHHANG::where('MaKhachHang', $MaKhachHang)->first();
            $NV->MaKhachHang = $request->MaKhachHang;
            $NV->HoSo = $request->HoSo;
            $NV->TaiKhoanKH=$request->TaiKhoanKH;
            $NV->LoaiKH=$request->LoaiKH;
            $NV->save();

            return Redirect::to('customer_list');
        } else {
            return view('404');
        }
    }

}
