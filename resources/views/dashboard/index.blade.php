@extends('layouts.dashboard.app')
@section('content')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>

        <div class="content-body">
        <div class="content-header row">
        <div id="crypto-stats-3" class="row">
            <div class="col-xl-4 col-12">
                <div class="card crypto-card-3 pull-up">
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-2">
                                    <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                </div>
                                <div class="col-5 pl-2">
                                    <h4>{{ $students}}</h4>
                                    <p>الطلاب</p>
                                </div>
                                <div class="col-5 text-right">

                                   <a href="{{ route('admin.students')}}"><span>Read</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <canvas id="btc-chartjs" class="height-75"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="card crypto-card-3 pull-up">
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-2">
                                    <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                </div>
                                <div class="col-5 pl-2">
                                    <h4>{{ $courses }}</h4>
                                    <p>الكورسات</p>
                                </div>
                                <div class="col-5 text-right">

                                   <a href="{{ route('admin.courses')}}"><span >Read</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <canvas id="eth-chartjs" class="height-75"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="card crypto-card-3 pull-up">
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-2">
                                    <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                </div>
                                <div class="col-5 pl-2">
                                    <h4>{{ $enrolls }}</h4>
                                    <p>الطلاب المسجلين</p>

                                </div>
                                <div class="col-5 text-right">
                                   <a href="{{ route('admin.students.enroll')}}"><span>Read</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <canvas id="xrp-chartjs" class="height-75"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
    </div>

@endsection
