@extends('layouts.admin_layout')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                <h2 class="text-white mb-0"></h2>
                            </div>
                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                            <span class="d-none d-md-block">Month</span>
                                            <span class="d-md-none">M</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                            <span class="d-none d-md-block">Week</span>
                                            <span class="d-md-none">W</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="text-uppercase text-muted ls-1 mb-1">Clipboard</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="whiteboard">
                            <textarea id="whiteboard" style="width: 90%;height: 75%;font-size: 18px;margin: 20px;border: 10px solid #7b61e4;" readonly="">nmmnkmlkml</textarea><button id="edit" data-focus="off" hidden="true">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Course Modification Proposals') }}</h3>
                            </div>
                            <div class="col text-right">
                                {{__('There are') }}
                                <a href="#!" class="btn btn-sm btn-primary">0</a>
                                {{__('requests to evaluate') }}
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Members') }}</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">359</a>
                                {{__('members are registered .') }}
                            </div>
                        </div>
                    </div>

                </div><br>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Payment status') }}</h3>
                            </div>
                            <div class="col text-right">
                                {{__('There are') }}
                                <a href="#!" class="btn btn-sm btn-primary">319</a>
                                {{__('outstanding payments .') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{__('Events') }}</h3>
                            </div>

                        </div>
                    </div>

                    <div class="row align-items-center">

                        <div class="col text-center">
                            <div class="col">
                                <a href="#!" class="btn btn-sm btn-primary">45</a>
                                {{__('events are active .') }}
                            </div>


                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col text-center">
                            <a href="#!" class="btn btn-sm btn-primary">45</a>
                            {{__('At the moment') }}<br>
                            <a href="#!" class="btn btn-sm btn-primary">0</a>
                            {{__('events are in progress out of a total of') }}
                            <a href="#!" class="btn btn-sm btn-primary">0</a>
                            {{__('scheduled for today') }}
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Payments accepted today') }}</h3>
                            </div>
                            <div class="col text-right">

                                <a href="#!" class="btn btn-sm btn-primary">0</a>
                                {{__('payments have been accepted for a total of') }} 0.00 €.
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{ __('Payments accepted yesterday') }}</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">359</a>
                                {{__('payments have been accepted for a total of') }} 0.00 €.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">{{__('CM status registered') }}</h3>
                            </div>

                        </div>
                    </div>

                    <div class="row align-items-center">

                        <div class="col text-center">
                            <div class="col">
                                {{__('There are') }}
                                <a href="#!" class="btn btn-sm btn-primary">94</a>
                                {{__('expired CMs .') }}
                            </div>


                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">

                        <div class="col text-center">
                            <div class="col">
                                <a href="#!" class="btn btn-sm btn-primary">43</a>
                                {{__('CM expiring in the month.') }}
                            </div>


                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-center">
                        <div class="col text-center">
                            {{__('a total of') }}
                            <a href="#!" class="btn btn-sm btn-primary">207</a>
                            {{__('subscribers do not have a CM.') }}
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>

            </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush