!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SAN AGUSTINE - MSWD</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="fixed-navbar">
<div class="page-heading">
             
                <div style="position: absolute; left: 630; top: -0;">
                          <img src="{{ URL::asset('public/logo_mswd.jpg') }}" alt="" style="width: 100px;">
                </div>
                               
                <center><p >
                            <b>REPUBLIC OF THE PHILIPPINES<br>
                            <span style='font-size:13.0px'>PROVINCE OF SURIGAO DEL SUR</span><br>
                            <span style='font-size:12.0px'> MUNICIPALITY OF SAN AGUSTINE</span><br>
                            <span style='font-size:12.0px'> MUNICIPALITY SOCIAL OF WELFARE DEVELOPMENT</span><br>
                            </p></center>
               
                  
                            <div style="position: absolute; right: 630; top: -0;">
                          <img src="{{ URL::asset('public/san_agustin.png') }}" alt="" style="width: 100px;">
                </div>
              
               
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox invoice">
                    <div class="invoice-header">
                        <div class="row">
                            <div class="col-6">
                                <!-- <div class="invoice-logo">
                                    <img src="./assets/img/logos/github-logo.png" height="65px" />
                                </div> -->
                                <div>
                                    <ul class="list-unstyled m-t-10">
                                        <li class="m-b-5">
                                            <span class="font-strong" >Barangay: </span> {{$barangay}}</li>
                                        <!-- <li class="m-b-5">
                                            <span class="font-strong">Category: </span> {{$category}}</li>
                                        <li>
                                        <li class="m-b-5">
                                            <span class="font-strong">Choose: </span> {{$choose}}</li>
                                        <li> -->
                                        <li class="m-b-5">
                                            <span class="font-strong">Total Result: </span> {{$total}}</li>
                                        <li>
                                     
                                       
                                    </ul>
                                </div>
                            </div>
                     
                            <table class="table table-bordered">
                        <thead>
                            
                            <tr>
                              
                                <th style="font-size:12px; width:15px;">NAME</th>
                                <th style="font-size:12px; width:5px;">GENDER</th>
                                <th style="font-size:12px; width:5px;">BIRTHDATE</th>
                                <th style="font-size:12px; width:5px;">AGE CATEGORY</th>
                                <th style="font-size:12px; width:5px;">CHILD CLASSIFICATION</th>
                                <th style="font-size:12px; width:25px;" >ADDRESS</th>
                                <th style="font-size:12px; width:25px;" >LGBT</th>
                                <th style="font-size:12px; width:25px;" >ETHNICITY</th>
                                <th style="font-size:12px; width:25px;" >ADOLESCENT</th>
                                <th style="font-size:12px; width:28px;" >WEIGHT STATUS</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($filter as $key=>$data)
                            <tr>
                             
                                <td style="font-size:12px;  width:15px;">{{$data->lastname}}, {{$data->firstname}} {{$data->middlename}}</td>
                                <td style="font-size:12px;  width:5px;">{{$data->gender}}</td>
                                <td style="font-size:12px;  width:5px;">{{$data->birthdate}}<br>
                                Age: {{$data->age}}
                            </td>
                              
                                <td style="font-size:12px;  width:5px;">{{$data->ageCategory}}</td>
                                <td style="font-size:12px;  width:5px;">{{$data->childClassification}}</td>
                                <td style="font-size:12px;  width:25px;">{{$data->address}}</td>
                                <td style="font-size:12px;  width:25px;">{{$data->lgbt}}</td>
                                <td style="font-size:12px;  width:25px;">{{$data->ethnicity}}</td>
                                <td style="font-size:12px;  width:25px;">{{$data->adolescent}}</td>
                                <td style="font-size:12px;  width:28px;">{{$data->weightstatus}}</td>
                         
                            </tr>
                          @endforeach  

                           
                        </tbody>
                    </table>

                   <br>
                    <div style="margin-left: 1000px; margin-top: 2px; font-size:15px;"> <b>{{Auth::user()->name}}</b></div>
                    <div style="margin-left: 970px; margin-top: 2px; font-size:15px;"> Authorized By</div>
                    
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

            </body>

</html>


   