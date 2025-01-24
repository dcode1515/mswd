
@extends('layouts.template')
@section('content')

<div class="page-heading">
                <br>
                <center>
                   
                    <img src="{{ URL::asset('public/Department_of_Social_Welfare_and_Development.png') }}" alt="" style="width: 100px;">
                    <h1 class="page-title">Generate  Report</h1> </center>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
              
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox invoice">
                    <div class="invoice-header">
                        <div class="row">
                            <div class="col-6">
                                <!-- <div class="invoice-logo">
                                    <img src="./assets/img/logos/github-logo.png" height="65px" />
                                </div> -->
                    <form action="{{route('print.report')}}" method="GET" target="_blank"> 
                                <div>
                                    <ul class="list-unstyled m-t-10">
                                        <li class="m-b-5">
                                            <span class="font-strong">Barangay: </span> {{$barangay}}</li>
                                        <li class="m-b-5">
                                            <span class="font-strong">Category: </span> {{$category}}</li>
                                        <li>
                                        <li class="m-b-5">
                                            <span class="font-strong">Total: </span> {{$total}}</li>
                                        <li>
                                     
                                       
                                    </ul>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                  
                    <button class="btn btn-info" type="submit" ><i class="fa fa-print"></i> Print</button>
                    <a href="{{route('reporting')}}" class="btn btn-danger" type="button"><i class="fa-fa-undo"></i> Back</a>
                </form>  
                    <br><br>
                    <table class="table table-striped no-margin table-invoice">
                        <thead>
                            
                            <tr>
                              
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Birthdate</th>
                                <th>Age</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($filter as $key=>$data)
                            <tr>
                             
                                <td>{{$data->lastname}}, {{$data->firstname}} {{$data->middlename}}</td>
                                <td>{{$data->gender}}</td>
                                <td>{{$data->birthdate}}</td>
                                <td>{{$data->age}}</td>
                                <td>{{$data->address}}</td>
                            </tr>
                          @endforeach  

                           
                        </tbody>
                    </table>
                    <table class="table no-border">
                        <thead>
                            <tr>
                                <th></th>
                                <th width="15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                  
                </div>
                <style>
                    .invoice {
                        padding: 20px
                    }

                    .invoice-header {
                        margin-bottom: 50px
                    }

                    .invoice-logo {
                        margin-bottom: 50px;
                    }

                  
                </style>
                
            </div>


   

@endsection

