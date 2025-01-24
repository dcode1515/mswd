@extends('layouts.template')
@section('content')
<div class="content">
                    <div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">UPDATE PROFILE</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">MSWD</a>
                                        </li>
                                        <li>
                                            <a href="#">SAN AGUSTIN</a>
                                        </li>
                                        <li class="active">
                                            SURIGAO DEL SUR
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div id="app">
                        <Editprofile
                        :id="{{ json_encode($mswd->id) }}"
                        :profile-no="{{ json_encode($mswd->profile_no)}}"
                        :profile-lastname="{{ json_encode($mswd->lastname)}}"
                        :profile-firstname="{{ json_encode($mswd->firstname)}}"
                        :profile-middlename="{{ json_encode($mswd->middlename)}}"
                        :profile-extension="{{ json_encode($mswd->extension)}}"
                        :profile-bdate="{{ json_encode($mswd->birthdate)}}"
                        :profile-age="{{ json_encode($mswd->age)}}"
                        :profile-agecategory="{{ json_encode($mswd->ageCategory)}}"
                        :profile-lgbt="{{ json_encode($mswd->lgbt)}}"
                        :profile-weight="{{ json_encode($mswd->weightstatus)}}"
                        :profile-classification="{{ json_encode($mswd->childClassification)}}"
                        :profile-school="{{ json_encode($mswd->nameofschool)}}"
                        :profile-typeschool="{{ json_encode($mswd->typeofschool)}}"
                        :profile-schoollevel="{{ json_encode($mswd->schoollevel)}}"
                        :profile-nameofemergency="{{ json_encode($mswd->nameofemergency)}}"
                        :profile-relationofemergency="{{ json_encode($mswd->relationofemergency)}}"
                        :profile-contactnoofemergency="{{ json_encode($mswd->contactnoofemergency)}}"
                        :profile-benefitstype="{{ json_encode($mswd->benefitstype)}}"
                        :profile-gender="{{ json_encode($mswd->gender)}}"
                        :profile-barangay="{{ json_encode($mswd->barangay)}}"
                        :profile-address="{{ json_encode($mswd->address)}}"
                        :profile-ethnicity="{{ json_encode($mswd->ethnicity)}}"
                        :profile-disability="{{ json_encode($mswd->disability)}}"
                    >
                    <Editprofile> 

                        </div>

                        


                        

                        


                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
       
@endsection