@extends('main_layout')

@section('content1')
    <div class="clearfix"></div>

    <li  >
        {{--class="fa fa-desktop fa-fw"--}}
        <a href="{{url('employee_list/')}}"><i class="fa fa-users">
                <div class="icon-bg bg-pink"></div>
            </i><span class="menu-title">Nhân viên</span></a>
    </li>


    <li><a href="{{url('bill_list/')}}"><i class="fa fa-file-o fa-fw ">
                <div class="icon-bg bg-green"></div>
            </i><span class="menu-title">Đơn hàng</span></a>

    </li>
    {{--fa fa-file-o fa-fw--}}
    <li ><a href="{{url('product_list/')}}"><i class="fa fa-mobile" style="font-size:2.2em;margin-left: -7px">
                <div class=""></div>
            </i><span class="menu-title"style="margin-left: 3px">Sản phẩm</span></a>

    </li>
    {{--fa fa-edit fa-fw--}}
    <li><a href="{{url('customer_list/')}}"><i class="fa fa-male"style="font-size:1.7em;margin-left: -3px">
                <div class="icon-bg bg-violet"></div>
            </i><span class="menu-title"style="margin-left: 5px">Khách hàng</span></a>

    </li>
    {{--fa fa-th-list fa-fw--}}
    <li><a href="/doitac"><i class="fa fa-edit"style="font-size:1.4em">
                <div class="icon-bg bg-blue"></div>
            </i><span class="menu-title">Đối tác</span></a>

    </li>
    {{--fa fa-database fa-fw--}}
    <li class="active"><a href="/chart"><i class="fa fa-bar-chart-o">
                <div class="icon-bg bg-red"></div>
            </i><span class="menu-title">Báo cáo </span></a>

    </li>
@endsection

@section('content')

    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb" style="color: black">
            <div class="page-header pull-left">
                <div class="page-title"></div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right"style="margin-top: -5px">
                <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html"style="color: black">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="hidden"><a href="dashboard.html" >Báo cáo</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                <li class="active"style="color: black">Báo cáo</li>
            </ol>
            <div class="clearfix">
            </div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="col-lg-9" style="margin-left: 130px;margin-top: 15px">
            <div class="timeline-centered timeline-sm">
                <article class="timeline-entry" >
                    <div class="timeline-entry-inner">
                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>Năm 2013</span><span></span></time>
                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                        <div class="timeline-label">

                            <p>Doanh thu: {{$Tong2013}}</p>
                            <p>Vốn: 198000000</p>
                            <p>Lợi nhuận: {{$Tong2013-198000000}}</p>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry left-aligned">
                    <div class="timeline-entry-inner">
                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>Năm 2014</span><span></span></time>
                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                        <div class="timeline-label bg-green">
                            <p>Doanh thu: {{$Tong2014}}</p>
                            <p>Vốn: 154000000</p>
                            <p>Lợi nhuận: {{$Tong2014-154000000}}</p>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry">
                    <div class="timeline-entry-inner">
                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>Năm 2015</span><span></span></time>
                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                        <div class="timeline-label">
                            <p>Doanh thu: {{$Tong2015}}</p>
                            <p>Vốn: 187000000</p>
                            <p>Lợi nhuận: {{$Tong2015-187000000}}</p>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry left-aligned">
                    <div class="timeline-entry-inner">
                        <time datetime="2014-01-10T03:45" class="timeline-time"><span>Năm 2016</span><span></span></time>
                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                        <div class="timeline-label bg-green">
                            <p>Doanh thu: {{$Tong2016}}</p>
                            <p>Vốn: 139000000</p>
                            <p>Lợi nhuận: {{$Tong2016-139000000}}</p>
                        </div>
                    </div>
                </article>

                <article class="timeline-entry">
                    <div class="timeline-entry-inner">
                        <time datetime="2014-01-09T13:22" class="timeline-time"><span>Năm 2017</span><span></span></time>
                        <div class="timeline-icon bg-orange"><i class="fa fa-paper-plane"></i></div>
                        <div class="timeline-label ">
                            <p>Doanh thu: {{$Tong2017}}</p>
                            <p>Vốn: 129000000</p>
                            <p>Lợi nhuận: {{$Tong2017-129000000}}</p>

                        </div>
                    </div>
                    <div class="timeline-entry-inner">
                        <div style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);" class="timeline-icon"><i class="fa fa-plus"></i></div>
                    </div>
                </article>



            </div>
        </div>
        <div class="page-content"style="margin-top: -45px;margin-left: -7px">

            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">

                        <div class="col-md-12">
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            {!! ConsoleTVs\Charts\Facades\Charts::assets() !!}
            <body>
            <center>
                {!! $chart->render() !!}

            </center>
            </body>
        </div>
    </div>


@endsection
