@extends('layouts.template')
@section('content')

<div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>VIEW PROFILE</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('barangay.dashboard')}}">Dashboard</a></li>
                  
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>

          <div id="app">
                <Viewprofile
                :id="{{ json_encode($profile->id) }}"
                :profileno="{{ json_encode($profile->profile_no)}}"
                :lastname="{{ json_encode($profile->lastname)}}"
                :firstname="{{ json_encode($profile->firstname)}}"
                :middlename="{{ json_encode($profile->middlename)}}"
                :extension="{{ json_encode($profile->extension)}}"
                :birthdate="{{ json_encode($profile->birthdate)}}"
                :age="{{ json_encode($profile->age)}}"
                :agecategory="{{ json_encode($profile->ageCategory)}}"
                :lgbt="{{ json_encode($profile->lgbt)}}"
                :weightstatus="{{ json_encode($profile->weightstatus)}}"
                :childclassification="{{ json_encode($profile->childClassification)}}"
                :nameofschool="{{ json_encode($profile->nameofschool)}}"
                :inschool="{{ json_encode($profile->inschool)}}"
                :schoollevel="{{ json_encode($profile->schoollevel)}}"
                :nameofemergency="{{ json_encode($profile->nameofemergency)}}"
                :relationofemergency="{{ json_encode($profile->relationofemergency)}}"
                :contactnoofemergency="{{ json_encode($profile->contactnoofemergency)}}"
                :benefitstype="{{ json_encode($profile->benefitstype)}}"
                :gender="{{ json_encode($profile->gender)}}"
                :barangay="{{ json_encode($profile->barangay)}}"
                :address="{{ json_encode($profile->address)}}"
                :adolescent="{{ json_encode($profile->adolescent)}}"
                :ethnicity="{{ json_encode($profile->ethnicity)}}"
                :typeofschool="{{ json_encode($profile->typeofschool)}}"
                :disability="{{ json_encode($profile->disability)}}"
                :forpsno="{{ json_encode($profile->forpsno)}}"
                :philhealth="{{ json_encode($profile->philhealth)}}"
                :philhealthno="{{ json_encode($profile->philhealth_no)}}"


                >
                 <Viewprofile>
        </div>
         
@endsection