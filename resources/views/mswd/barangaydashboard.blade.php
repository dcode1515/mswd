@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">MSWD</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Barangay Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Summary Cards -->
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>TOTAL ALL RECORDS</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$overall}}</h2>
            <span class="text-muted"><a href="{{route('all.records')}}">View Records</a></span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>IN SCHOOL YOUTH</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$is}}</h2>
            <span class="text-muted"><a href="{{route('is')}}">View Records</a></span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>OUT OF SCHOOL YOUTH</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$os}}</h2>
            <span class="text-muted"><a href="{{route('os')}}">View Records</a></span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>TOTAL ARCHIVED</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$archived}}</h2>
            <span class="text-muted"><a href="{{route('archive')}}">View Records</a></span>
        </div>
    </div>
</div><br>

<!-- Additional Cards for More Metrics -->
<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>LGBT YES</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$lgbtyes}}</h2>
            <span class="text-muted">Total LGBT Yes</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>LGBT NO</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$lgbtno}}</h2>
            <span class="text-muted">Total LGBT No</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>BENEFITS YES</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$forps}}</h2>
            <span class="text-muted">Total Benefits Yes</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-layers pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20"><b>BENEFITS NO</b></h6>
            <h2 class="m-b-20" data-plugin="counterup">{{$forpsno}}</h2>
            <span class="text-muted">Total Benefits No</span>
        </div>
    </div>
</div><br>

<!-- Tabs for Barangay List, Age Category, and Above 18 Age List -->
<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs mb-3" id="dashboardTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="barangay-tab" data-toggle="tab" href="#barangay" role="tab" aria-controls="barangay" aria-selected="true">Barangay List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="age-category-tab" data-toggle="tab" href="#age-category" role="tab" aria-controls="age-category" aria-selected="false">Age Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="above-18-tab" data-toggle="tab" href="#above-18" role="tab" aria-controls="above-18" aria-selected="false">Above 18 Age List</a>
            </li>
        </ul>

        <div class="tab-content" id="dashboardTabsContent">
            <!-- Barangay List Tab -->
            <div class="tab-pane fade show active" id="barangay" role="tabpanel" aria-labelledby="barangay-tab">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30"><b>BARANGAY LIST</b></h4>
                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #dee2e6;">BARANGAY</th>
                                    <th style="border: 1px solid #dee2e6;">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('britania.records') }}">BRITANIA</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$britania}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('buhisan.records') }}">BUHISAN</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$buhisan}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('buatong.records') }}">BUATONG</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$buatong}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('gata.records') }}">GATA</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$gata}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('hornasan.records') }}">HORNASAN</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$hornasan}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('janipaan.records') }}">JANIPAAN</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$janipaan}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('kauswagan.records') }}">KAUSWAGAN</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$kauswagan}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('otieza.records') }}">OTIEZA</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$otieza}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('poblacion.records') }}">POBLACION</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$poblacion}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('pungtod.records') }}">PUNGTOD</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$pungtod}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('pongon.records') }}">PONG-ON</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$pongon}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('salvacion.records') }}">SALVACION</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$salvacion}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('santonino.records') }}">STO NINO</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$santonino}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{ route('all.records') }}">TOTAL</a></td>
                                    <td style="border: 1px solid #dee2e6; color:red;">{{$overall}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Age Category Tab -->
            <div class="tab-pane fade" id="age-category" role="tabpanel" aria-labelledby="age-category-tab">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30"><b>AGE CATEGORY</b></h4>
                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #dee2e6;">CATEGORY</th>
                                    <th style="border: 1px solid #dee2e6;">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{route('category1')}}">0-2 CATEGORY</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$cat1}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{route('category2')}}">3-4 CATEGORY</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$cat2}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{route('category3')}}">5-12 CATEGORY</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$cat3}}</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid #dee2e6;"><a href="{{route('category4')}}">13-18 CATEGORY</a></td>
                                    <td style="border: 1px solid #dee2e6;">{{$cat4}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Above 18 Age List Tab -->
            <div class="tab-pane fade" id="above-18" role="tabpanel" aria-labelledby="above-18-tab">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30"><b>LIST OF ABOVE 18 AGE</b></h4>
                    <div class="table-responsive">
                        <table class="table table-bordered m-b-0">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid #dee2e6;">NAME</th>
                                    <th style="border: 1px solid #dee2e6;">AGE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($age as $data)
                                <tr>
                                    <td style="border: 1px solid #dee2e6;">{{$data->lastname}}</td>
                                    <td style="border: 1px solid #dee2e6;">{{$data->age}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection