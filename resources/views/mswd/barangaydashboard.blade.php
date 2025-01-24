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
                                    <h6 class="text-muted text-uppercase m-b-20"><b>OUT OF SCHOOL YOUUTH</b></h6>
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

                        <div class="row">
                        <div class="col-xs-12 col-lg-12 col-xl-5">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30"><b>BARANGAY LIST</b></h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>BARANGAY</th>
                                                    <th>TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('britania.records') }}">BRITANIA</a></th>
                                                    <th>{{$britania}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('buhisan.records') }}">BUHISAN</a></th>
                                                    <th>{{$buhisan}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('buatong.records') }}">BUATONG</a></th>
                                                    <th>{{$buatong}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('buatong.records') }}">GATA</a></th>
                                                    <th>{{$gata}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('hornasan.records') }}">HORNASAN</a></th>
                                                    <th>{{$hornasan}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('janipaan.records') }}">JANIPAAN</a></th>
                                                    <th>{{$janipaan}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('santonino.records') }}">KAUSWAGAN</a></th>
                                                    <th>{{$santonino}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('otieza.records') }}">OTIEZA</a></th>
                                                    <th>{{$otieza}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('poblacion.records') }}">POBLACION</a></th>
                                                    <th>{{$poblacion}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('pungtod.records') }}">PUNGTOD</a></th>
                                                    <th>{{$pungtod}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('pongon.records') }}">PONG-ON</a></th>
                                                    <th>{{$pongon}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('salvacion.records') }}">SALVACION</a></th>
                                                    <th>{{$salvacion}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('santonino.records') }}">STO NINO</a></th>
                                                    <th>{{$santonino}}</th>
                                                </tr>
                                                
                                                <tr>
                                                    <th class="text-muted"><a href="{{ route('all.records') }}">TOTAL</a></th>
                                                    <th style="color:red">{{$overall}}</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                        		</div>
                            </div><!-- end col-->

                            <div class="col-xs-12 col-lg-12 col-xl-7">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30"><b>AGE Category</b></h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>CATEGORY</th>
                                                    <th>TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted"><a href= "{{route('category1')}}">0-2 CATEGORY</a></th>
                                                    <th>{{$cat1}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href= "{{route('category2')}}">3-4 CATEGORY</a></th>
                                                    <th>{{$cat2}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href= "{{route('category3')}}">5-12 CATEGORY</a></th>
                                                    <th>{{$cat3}}</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted"><a href= "{{route('category4')}}">13-18 CATEGORY</a></th>
                                                    <th>{{$cat4}}</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                        		</div>
                                <div class="col-xs-12 col-lg-12 col-xl-7">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30"><b>List of Above 18 Age</b></h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>AGE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($age as $data)
                                                <tr>
                                                    <th >{{$data->lastname}}</th>
                                                    <th>{{$data->age}}</th>
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

                    </div>          



@endsection
