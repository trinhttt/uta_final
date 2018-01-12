<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\TAIKHOAN;
use Auth;
class TAIKHOANController extends Controller
{

    public function store()
    {
        $data=Input::except(array('_token'));

        $rule=array(
            'TenDN'=>'required',
            'Email'=>'required|email',
            'MatKhau'=>'required|min:6',
            'cpassword'=>'required|same:MatKhau'
        );
        $message=array(
            'cpassword.required'=>'The confirm password is required',
            'cpassword.min'=>'The confirm password must be at least 6 characters',
            'cpassword.same'=>'The confirm password and password must be same',
        );
        $validator=Validator::make($data,$rule,$message);

        if($validator->fails())
        {

            return Redirect::to('register')->withErrors($validator);
        }else{
           TAIKHOAN::formstore(Input::except(array('_token')));

            return Redirect::to('register')->with('success','Đăng ký thành công!');
        }
    }
    public function logout()
    {
        $NV = TAIKHOAN::where('DangNhap', '1')->first();


                $NV['DangNhap']=0;
                $NV->save();

        return Redirect::to('signin');
    }
    public function login()
    {

        $data=Input::except(array('_token'));
//        echo "test here";
//        var_dump($data);
//        exit();
        $rule=array(

            'Email'=>'required|email',
            'MatKhau'=>'required',

        );

        $k=0;//loai
        $NV = TAIKHOAN::where('Email', $data['Email'])->first();
        foreach (TAIKHOAN::all() as $r)
        {

            if($r['Email']==$data['Email']&&$r['MatKhau']==$data['MatKhau'])
            {

                $k=$r->LoaiTK;

                $NV->DangNhap=1;
                $NV->save();

                break;
            }
        }
        if($k=='3') {//1:nv,2:kh,3:admin
            return Redirect::to('employee_list');
                }

        if($k=='1') {
            return Redirect::to('employee_list');
        }
        else
            return Redirect::to('signin');

    }

}
