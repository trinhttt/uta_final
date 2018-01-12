<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
use App\HOADON;
use App\TAIKHOAN;
use Carbon\Carbon;
class ChartsController extends Controller
{
    public function index()
    {
        $T='No name';
        foreach (TAIKHOAN::all() as $r)
        {

            if($r['DangNhap']==1)
            {

                $T=$r['TenDN'];
                break;
            }
        }


        $Tong2013 = 0;
        $Tong2014 = 0;
        $Tong2015 = 0;
        $Tong2016 = 0;
        $Tong2017 = 0;
        foreach (HOADON::all() as $b) {

            $date = new Carbon($b->NgayLapHD);




            if ($date->format('Y') == 2013) {
                $Tong2013 = $Tong2013+$b->TongTien;
            }
            if ($date->format('Y') == 2014) {
                $Tong2014 = $Tong2014+$b->TongTien;
            }
            if ($date->format('Y') == 2015) {
                $Tong2015 = $Tong2015+$b->TongTien;
            }
            if ($date->format('Y') == 2016) {
                $Tong2016 = $Tong2016+$b->TongTien;
            }
            if ($date->format('Y') == 2017) {
                $Tong2017 = $Tong2017+$b->TongTien;
            }
//            var_dump("NONO");
//            exit();
        }
        $f_data = [];



        array_push($f_data, $Tong2013);
        array_push($f_data, $Tong2014);
        array_push($f_data, $Tong2015);
        array_push($f_data, $Tong2016);
        array_push($f_data, $Tong2017);


        $chart = Charts::create('line', 'highcharts')
            ->Title('Doanh thu cửa hàng Uta qua từng năm (2013->2017)')
            ->Labels([ '2013', '2014', '2015', '2016','2017'])
            ->Values($f_data)
            ->Dimensions(1000, 500)
            ->Responsive(false)
            ->ElementLabel('Doanh thu (VNĐ)');
        return view('Chart', ['chart' => $chart],compact('T','Tong2013','Tong2014','Tong2015','Tong2016','Tong2017'));
    }
}


