@extends('layouts.template')
@section('content')
<div class="content">
                    <div class="container">

                        <div class="row">
							  
                        <div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title"><b>PROFILE SUMMARY</b></h4>
                                  
                                    <ol class="breadcrumb p-0">
                                        <li>
                                         <h6>  
                                            MSWD 
                                            SAN AGUSTIN 
                                            SURIGAO DEL SUR
                                                
                                        </h6> 
                                      
                                            
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                <h4 class="m-t-0 header-title"><b>MUNICIPALITY OF SAN AGUSINE SURIGAO DEL SUR</b></h4><br>

                                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>PROFILE NO</th>
                                                <th>NAME</th>
                                                <th>BIRTHDATE</th>
                                                <th>GENDER</th>
                                                <th>BARANGAY</th>
                                                <th>CHILD CLASSIFICATION</th>
                                                <th>DISABILITY</th>
                                                <th>4PS MEMBER</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                          @foreach($records  as $key=>$data)
                                            <tr>
                                                <td>{{$data->profile_no}}</td>
                                                <td>{{$data->lastname}}, {{$data->firstname}} {{$data->middlename}}</td>
                                                <td><b>Birth Date:</b> {{$data->birthdate}}<br>
                                                <b>Age: </b>{{$data->age}}<br>
                                                <b>Age Category:</b> {{$data->ageCategory}}
                                                  
                                                 </td>
                                                 <td>{{$data->gender}}</td>
                                                 <td>{{$data->barangay}}</td>
                                                 <td>{{$data->childClassification}}</td>
                                                 <td>{{$data->disability}}</td>
                                                 <td>{{$data->benefitstype}}</td>
                                                 <td>{{$data->status}}</td>
                                                                              <td><!-- Example single danger button -->
                              <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Options
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" data-toggle="modal" data-target=".bs-example-modal-lg{{$data->id}}">View</a>
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>  </td>
                              <div class="modal fade bs-example-modal-lg{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myLargeModalLabel">VIEW PROFILE</h4>
                                                </div>
                                                <div class="modal-body">
                                                    PROFILE NO: {{$data->profile_no}}<br><br>
                                                    <b>PROFILE INFORMATION</b>
                                                   <div class="row">
                                                      <div class="col-md-3">
                                                        <label>Lastname:</label>
                                                        <input type="text" class="form-control" value="{{$data->lastname}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Firstname:</label>
                                                        <input type="text" class="form-control" value="{{$data->firstname}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Middlename:</label>
                                                        <input type="text" class="form-control" value="{{$data->middlename}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Extension:</label>
                                                        <input type="text" class="form-control" value="{{$data->extension}}"><br>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>GENDER:</label>
                                                        <input type="text" class="form-control" value="{{$data->gender}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>BIRTHDATE:</label>
                                                        <input type="text" class="form-control" value="{{$data->birthdate}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>AGE:</label>
                                                        <input type="text" class="form-control" value="{{$data->age}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>AGE CATEGORY:</label>
                                                        <input type="text" class="form-control" value="{{$data->ageCategory}}"><br>
                                                      </div>
                                                      @if($data->ageCategory==="0-2")
                                                      <div class="col-md-3">
                                                        <label>LGBT:</label>
                                                        <input type="text" class="form-control" value="{{$data->lgbt}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Weight Status:</label>
                                                        <input type="text" class="form-control" value="{{$data->weightstatus}}">
                                                      </div>

                                                      @endif

                                                      @if($data->ageCategory==="3-4")
                                                      <div class="col-md-3">
                                                        <label>Weight Status:</label>
                                                        <input type="text" class="form-control" value="{{$data->weightstatus}}">
                                                      </div>
                                                     @endif
                                                     @if($data->ageCategory==="5-12")
                                                      
                                                      <div class="col-md-3">
                                                        <label>Child Classification:</label>
                                                        <input type="text" class="form-control" value="{{$data->childClassification}}">
                                                      </div>
                                                     @endif

                                                     @if($data->childClassification==="In School Youth")
                                                     <div class="col-md-3">
                                                        <label>Type of School:</label>
                                                        <input type="text" class="form-control" value="{{$data->typeofschool}}">
                                                      </div>
                                                     <div class="col-md-3">
                                                        <label>Name of School:</label>
                                                        <input type="text" class="form-control" value="{{$data->nameofschool}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>School Level:</label>
                                                        <input type="text" class="form-control" value="{{$data->schoollevel}}"><br>
                                                      </div>
                                                     @endif
                                                     <div class="col-md-12">
                                                        <label>Barangay:</label>
                                                        <input type="text" class="form-control" value="{{$data->barangay}}"><br>
                                                      </div>
                                                      <div class="col-md-12">
                                                        <label>Address:</label>
                                                        <textarea id="w3review" class="form-control" name="w3review" rows="4" cols="50">{{$data->address }}</textarea><br>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Adolescent Matter:</label>
                                                        <input type="text" class="form-control" value="{{$data->adolescent}}">
                                                      </div>
                                                     
                                                      <div class="col-md-3">
                                                        <label>Ethnicity:</label>
                                                        <input type="text" class="form-control" value="{{$data->ethnicity}}"><br>
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>Disability:</label>
                                                        <input type="text" class="form-control" value="{{$data->disability}}">
                                                      </div>
                                                    </div><br>
                                                    <b>OTHER INFORMATION (IN CASE OF EMERGENCY)</b><br>
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label>NAME:</label>
                                                        <input type="text" class="form-control" value="{{$data->relationofemergency}}">
                                                      </div>
                                                      
                                                      <div class="col-md-3">
                                                        <label>RELATION:</label>
                                                        <input type="text" class="form-control" value="{{$data->relationofemergency}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>CONTACT NUMBER:</label>
                                                        <input type="text" class="form-control" value="{{$data->contactnoofemergency}}">
                                                      </div>
                                                      <div class="col-md-3">
                                                        <label>4'PS MEMBER:</label>
                                                        <input type="text" class="form-control" value="{{$data->benefitstype}}"><br>
                                                      </div>
                                                      @if($data->benefitstype==="Yes")
                                                      <div class="col-md-3">
                                                        <label>4'PS No:</label>
                                                        <input type="text" class="form-control" value="{{$data->forpsno}}"><br>
                                                      </div>
                                                      @endif

                                                      <div class="col-md-3">
                                                        <label>PHILHEALTH MEMBER:</label>
                                                        <input type="text" class="form-control" value="{{$data->disability}}">
                                                      </div>
                                                      @if($data->philhealth==="Yes")
                                                      
                                                      <div class="col-md-3">
                                                        <label>PHILHEALTH MEMBER:</label>
                                                        <input type="text" class="form-control" value="{{$data->philhealth_no}}">
                                                      </div>

                                                      @endif
                                                    
                                                    </div>
                                                 
                                                </div>
                                                
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                            </tr>
                                            @endforeach
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


                       
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->
@endsection
