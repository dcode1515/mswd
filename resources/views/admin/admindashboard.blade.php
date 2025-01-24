@extends('layouts.template')
@section('content')
<div class="container-fluid dashboard-default-sec">
            <div class="row">
              <div class="col-xl-4 box-col-12 des-xl-100"> 
                <div class="row">
                  <div class="col-xl-12 col-md-6 box-col-6 des-xl-50">
                    <div class="card profile-greeting">
                      <div class="card-header">
                        <div class="header-top">
                          <div class="setting-list bg-primary position-unset">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-white"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-white"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                              <li><i class="icofont icofont-error close-card font-white"> </i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body text-center p-t-0">
                        <h3 class="font-light">Welcome Back, {{Auth::user()->name}}!!</h3>
                        <p>Welcome to the viho Family! ddasdasdas</p>
                        <!-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal/{{Auth::user()->id}}">Update your Profile</button> -->

                    
                      </div>
                      <div class="confetti">
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="confetti-piece"></div>
                        <div class="code-box-copy">
                      
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#profile-greeting" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    
                        </div>
                        
                      </div>
                      <div
            class="modal fade modal-bookmark"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Profile #: 
                  </h5>
                  <button
                    class="btn-close"
                    type="button"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="task-title">Lastname</label>
                      <input
                        class="form-control"
                        id="task-title"
                        :value="data.lastname"
                        type="text"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Firstname</label>
                      <input
                        class="form-control"
                        id="task-title"
                       
                        type="text"
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Middlename</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                    
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Extension</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Gender</label>
                      <select class="form-control" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Birthdate</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="date"
                     
                        required=""
                        autocomplete="off"
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Age</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                     
                        disabled
                      />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="task-title">Age Category</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                        disabled
                      />
                    </div>

                   
                      <div class="form-group col-md-12">
                        <label for="task-title">LGBT</label>
                        <input
                          class="form-control"
                          id="task-title"
                          type="text"
                        
                          disabled
                        />
                      </div>
                 
                
                      <div class="form-group col-md-12">
                        <label for="task-title">Weight Status</label>
                        <select class="form-control" :value="data.weightstatus">
                          <option value="Obese">Obese</option>
                          <option value="Stunted">Stunted</option>
                          <option value="Stunted">Wasted</option>
                          <option value="Overweight">Overweight</option>
                        </select>
                      </div>
                  
                   
                      <div class="form-group col-md-3">
                        <label for="task-title">Child Classification</label>
                        <select
                          class="form-control"
                        
                        >
                          <option disabled value="">
                            Select Child Classification
                          </option>
                          <option value="In School Youth">
                            In School Youth
                          </option>
                          <option value="Out of School Youth">
                            Out of School Youth
                          </option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">Type of School</label>
                        <select class="form-control" >
                          <option disabled value="">
                            Select Name of School
                          </option>
                          <option value="Private">Private</option>
                          <option value="Public">Public</option>
                          <option value="ALS">ALS</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">School Level</label>
                        <select class="form-control" >
                          <option value="Day Care">Day Care</option>
                          <option value="Elementary">Elementary</option>
                          <option value="High School">High School</option>
                          <option value="Senior High">Senior High</option>
                          <option value="College Level">College Level</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="task-title">Name of School</label>
                        <input
                          class="form-control"
                          id="task-title"
                          type="text"
                         
                        />
                      </div>
                    </template>
                    <div class="form-group col-md-12">
                      <label for="task-title">Barangay</label>
                      <select  class="form-control" >
                        <option disabled value="">Select Barangay</option>
                        <option value="BRITANIA">BRITANIA</option>
                        <option value="BUATONG">BUATONG</option>
                        <option value="BUHISAN">BUHISAN</option>
                        <option value="GATA">GATA</option>
                        <option value="HORNASAN">HORNASAN</option>
                        <option value="JANIPAAN">JANIPAAN</option>
                        <option value="KAUSWAGAN">KAUSWAGAN</option>
                        <option value="OTIEZA">OTIEZA</option>
                        <option value="POBLACION">POBLACION</option>
                        <option value="PUNGTOD">PUNGTOD</option>
                        <option value="PONG-ON">PONG-ON</option>
                        <option value="SALVACION">SALVACION</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="task-title">Address</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                     
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Adolescent Matter</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Ethnicity</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Disability</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>

                    <div class="form-group col-md-4">
                      <label for="task-title">Name of Relation</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                       
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Relation</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-4">
                      <label for="task-title">Contact Number:</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">4p's Member</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                   
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">4p's No</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">Philhealth Member</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                      
                      />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="task-title">Philhealth No</label>
                      <input
                        class="form-control"
                        id="task-title"
                        type="text"
                    
                      />
                    </div>
                  </div>
                  <button
                    class="btn btn-primary"
                    type="button"
                    data-bs-dismiss="modal"
                  >
                    Update Profile
                  </button>
                  <button class="btn btn-secondary">
                    Archive
                  </button>
                </div>
              </div>
            </div>
          </div>
                    </div>
                  </div>
                 
                
                
                </div>
              </div>

              

              <div class="col-xl-2 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <h5><a href="{{route('all.records')}}">{{$overall}}</a></h5>
                        <p><b>Total All Records</b></p><a class="btn-arrow arrow-primary" href="{{route('all.records')}}"></a>
                        <div class="parrten">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <h5><a href="{{route('is')}}">{{$is}}</a></h5>
                        <p><b>In School Youth</b></p><a class="btn-arrow arrow-primary" href="javascript:void(0)"></a>
                        <div class="parrten">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-xl-2 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <h5><a href="{{route('os')}}">{{$os}}</a></h5>
                        <p><b>Out of School Youth</b></p><a class="btn-arrow arrow-primary" href="javascript:void(0)"> </a>
                        <div class="parrten">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-6 box-col-3 des-xl-25 rate-sec">
                    <div class="card income-card card-primary">                                 
                      <div class="card-body text-center">                                  
                        <div class="round-box">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z"></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <h5><a href="{{route('archive')}}">{{$archived}}</a></h5>
                        <p><b>Archive</b></p><a class="btn-arrow arrow-primary" href="javascript:void(0)"> </a>
                        <div class="parrten">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 448.057 448.057" style="enable-background:new 0 0 448.057 448.057;" xml:space="preserve">
                            <g>
                              <g>
                                <path d="M404.562,7.468c-0.021-0.017-0.041-0.034-0.062-0.051c-13.577-11.314-33.755-9.479-45.069,4.099                                            c-0.017,0.02-0.034,0.041-0.051,0.062l-135.36,162.56L88.66,11.577C77.35-2.031,57.149-3.894,43.54,7.417                                            c-13.608,11.311-15.471,31.512-4.16,45.12l129.6,155.52h-40.96c-17.673,0-32,14.327-32,32s14.327,32,32,32h64v144                                            c0,17.673,14.327,32,32,32c17.673,0,32-14.327,32-32v-180.48l152.64-183.04C419.974,38.96,418.139,18.782,404.562,7.468z"></path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M320.02,208.057h-16c-17.673,0-32,14.327-32,32s14.327,32,32,32h16c17.673,0,32-14.327,32-32                                            S337.694,208.057,320.02,208.057z">                                  </path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                    <div class="card latest-update-sec">
                      <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                          <h5>LGBT Members and 4'ps Members</h5>
                          <div class="center-content">
                           
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary">                                </i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                              <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span> LGBT Member</span>
                                     
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank">{{$lgbtyes}}</a></td>
                              
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span> LGBT Not Member</span>
                                     
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank">{{$lgbtno}}</a></td>
                              
                              </tr>
                           
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>4p's Member</span>
                                     
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank">{{$forps}}</a></td>
                              
                              </tr>
                              <tr>

                           
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>Not 4p's Member</span>
                                     
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank">{{$forpsno}}</a></td>
                              
                              </tr>
                         
                            </tbody>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#latest-update-sec" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="latest-update-sec">                                     &lt;div class="card latest-update-sec"&gt; 
  &lt;div class="card-header"&gt;
    &lt;div class="header-top d-sm-flex align-items-center"&gt;
      &lt;h5&gt; Latest Update &lt;/h5&gt;
       &lt;div class="center-content" &gt;
         &lt;ul class="week-date" &gt;
             &lt;li class="font-primary"&gt; Today &lt;/li&gt;
             &lt;li &gt; Month &lt;/li&gt;
          &lt;/ul&gt; 
      &lt;/div&gt;
      &lt;div class="setting-list"&gt;
        &lt;ul class="list-unstyled setting-option"&gt;
          &lt;li&gt;&lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
          &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="card-body px-0"&gt;
    &lt;div class="table-responsive"&gt;
        &lt;table class="table table-bordernone"&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                           &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0 L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682 l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323 C513.881,100.571,513.907,88.288,506.35,80.699z"&gt;&lt;/path&gt;
                                &lt;/g&gt;
                             &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667 c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z "&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067 c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Google project Apply Review&lt;/span&gt;
                            &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"&gt;&lt;/path&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Business Logo Create&lt;/span&gt;
                            &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;g&gt;
                                 &lt;path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"&gt;&lt;/path&gt;<br>&lt;path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"&gt;&lt;/path&gt;<br>&lt;path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"&gt;&lt;/path&gt;<br>&lt;path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"&gt;&lt;/path&gt;<br>&lt;path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"&gt;&lt;/path&gt;<br>&lt;path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"&gt;&lt;/path&gt;<br>&lt;path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br>&lt;path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"&gt;&lt;/path&gt;<br>&lt;path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"&gt;&lt;/path&gt;<br>&lt;path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"&gt;&lt;/path&gt;<br>&lt;path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Business Project Research&lt;/span&gt;
                            &lt;p&gt; Due in 1 hour&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                          &lt;svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"&gt;
                               &lt;g&gt;
                                 &lt;path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"&gt;&lt;/path&gt;
                                 &lt;path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"&gt;&lt;/path&gt;<br>&lt;path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 270h120v30h-120z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 210h210v30h-210z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 150h210v30h-210z"&gt;&lt;/path&gt;
                                 &lt;path d="m331 90h120v30h-120z"&gt;&lt;/path&gt;
                                 &lt;path d="m241 90h60v30h-60z"&gt;&lt;/path&gt;
                                 &lt;path d="m391 270h60v30h-60z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Recruitment in IT Depertment&lt;/span&gt;
                            &lt;p&gt; Complete in 3 Hours&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;td&gt;
                      &lt;div class="media"&gt;
                           &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"&gt;
                               &lt;g&gt;
                                 &lt;g&gt;
                                   &lt;path d="M256,0C114.848,0,0,114.848,0,256s114.848,256,256,256s256-114.848,256-256S397.152,0,256,0z M256,480 C132.48,480,32,379.52,32,256S132.48,32,256,32s224,100.48,224,224S379.52,480,256,480z"&gt;&lt;/path&gt;
                                 &lt;/g&gt;
                               &lt;/g&gt;
                             &lt;g&gt;
                               &lt;g&gt;
                                 &lt;path d="M340.688,292.688L272,361.376V96h-32v265.376l-68.688-68.688l-22.624,22.624l96,96c3.12,3.12,7.216,4.688,11.312,4.688 s8.192-1.568,11.312-4.688l96-96L340.688,292.688z"&gt;&lt;/path&gt;
                               &lt;/g&gt;
                             &lt;/g&gt;
                           &lt;/svg&gt;
                        &lt;div class="media-body"&gt;
                            &lt;span&gt; Submit Riverfront Project&lt;/span&gt;
                            &lt;p&gt; Complete in 2 Days&lt;/p&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Edit
                  &lt;/a&gt;
                &lt;/td&gt;
                &lt;td&gt;
                  &lt;a href='index.html' target='_blank'&gt; Detete
                  &lt;/a&gt;
                &lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;                                       
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-50 box-col-6 des-xl-50">
                    <div class="card latest-update-sec">
                      <div class="card-header">
                        <div class="header-top d-sm-flex align-items-center">
                          <h5>AGE Category</h5>
                          <div class="center-content">
                            
                          </div>
                          <div class="setting-list">
                            <ul class="list-unstyled setting-option">
                              <li>
                                <div class="setting-primary"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary">                                </i></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordernone">
                            <tbody>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                      <g>
                                        <g>
                                          <path d="M506.35,80.699c-7.57-7.589-19.834-7.609-27.43-0.052L331.662,227.31l-42.557-42.557c-7.577-7.57-19.846-7.577-27.423,0                                                      L89.076,357.36c-7.577,7.57-7.577,19.853,0,27.423c3.782,3.788,8.747,5.682,13.712,5.682c4.958,0,9.93-1.894,13.711-5.682                                                      l158.895-158.888l42.531,42.524c7.57,7.57,19.808,7.577,27.397,0.032l160.97-160.323                                                      C513.881,100.571,513.907,88.288,506.35,80.699z"></path>
                                        </g>
                                      </g>
                                      <g>
                                        <g>
                                          <path d="M491.96,449.94H38.788V42.667c0-10.712-8.682-19.394-19.394-19.394S0,31.955,0,42.667v426.667                                                      c0,10.712,8.682,19.394,19.394,19.394H491.96c10.712,0,19.394-8.682,19.394-19.394C511.354,458.622,502.672,449.94,491.96,449.94z                                                      "></path>
                                        </g>
                                      </g>
                                      <g>
                                        <g>
                                          <path d="M492.606,74.344H347.152c-10.712,0-19.394,8.682-19.394,19.394s8.682,19.394,19.394,19.394h126.061v126.067                                                      c0,10.705,8.682,19.394,19.394,19.394S512,249.904,512,239.192V93.738C512,83.026,503.318,74.344,492.606,74.344z"></path>
                                        </g>
                                      </g>
                                    </svg>
                                    <div class="media-body"><span>0-2 Category</span>
                                   
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank"><b>{{$cat1}}</a></td>
                             
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <path d="m362 91v-60h-212v60h-150v390h512c0-16.889 0-372.29 0-390zm-182-30h152v30h-152zm302 390h-452v-202.844l90 36v46.844h90v-30h92v30h90v-46.844l90-36zm-302-150h-30v-60h30zm152-60h30v60h-30c0-7.259 0-52.693 0-60zm150-25.156-90 36v-40.844h-90v60h-92v-60h-90v40.844l-90-36c0-14.163 0-84.634 0-94.844h452z"></path>
                                    </svg>
                                    <div class="media-body"><span>3-4 Category</span>
                                   
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank"><b>{{$cat2}}</a></td>
                              
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <g>
                                        <path d="m345.622 126.038c-50.748-45.076-130.482-46.914-183.244 3.903-21.262 20.478-35.375 47.381-39.737 75.754-5.454 35.471 2.872 70.834 23.444 99.576 56.271 78.616 49.132 141.058 49.915 145.691 0 16.435 6.211 31.795 17.491 43.253 11.289 11.469 26.386 17.785 42.509 17.785 33.084 0 60-26.916 60-60 .686-4.269-6.11-72.81 47.676-143.691 17.875-23.557 27.324-51.673 27.324-81.309 0-38.547-16.54-75.347-45.378-100.962zm-89.622 355.962c-16.486 0-29.462-13.096-29.975-30h59.975c0 16.542-13.458 30-30 30zm83.777-191.826c-30.015 39.554-47.946 84.707-52.569 131.826h-62.57c-4.961-45.331-23.43-91.26-54.157-134.19-15.985-22.333-22.444-49.876-18.188-77.556 7.293-47.43 49.733-88.262 103.846-88.262 58.661 0 104.861 47.891 104.861 105.008 0 23.032-7.339 44.877-21.223 63.174z"></path>
                                        <path d="m256 62c8.284 0 15-6.716 15-15v-32c0-8.284-6.716-15-15-15s-15 6.716-15 15v32c0 8.284 6.716 15 15 15z"></path>
                                        <path d="m419.385 149.99 25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.142-7.175-13.316-9.633-20.49-5.49l-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.162 7.21 13.349 9.613 20.49 5.49z"></path>
                                        <path d="m92.615 304.01-25.98 15c-7.174 4.142-9.632 13.316-5.49 20.49 4.163 7.21 13.35 9.613 20.49 5.49l25.98-15c7.174-4.142 9.632-13.316 5.49-20.49-4.141-7.175-13.316-9.632-20.49-5.49z"></path>
                                        <path d="m338.5 84.105c7.141 4.124 16.33 1.716 20.49-5.49l15-25.98c4.142-7.174 1.684-16.348-5.49-20.49-7.174-4.144-16.349-1.685-20.49 5.49l-15 25.98c-4.142 7.175-1.684 16.348 5.49 20.49z"></path>
                                        <path d="m153.01 78.615c4.163 7.21 13.35 9.613 20.49 5.49 7.174-4.142 9.632-13.316 5.49-20.49l-15-25.98c-4.142-7.174-13.315-9.633-20.49-5.49-7.174 4.142-9.632 13.316-5.49 20.49z"></path>
                                        <path d="m445.365 319.01-25.98-15c-7.175-4.143-16.349-1.684-20.49 5.49-4.142 7.174-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"></path>
                                        <path d="m107.615 124.01-25.98-15c-7.175-4.144-16.348-1.684-20.49 5.49s-1.684 16.348 5.49 20.49l25.98 15c7.141 4.124 16.33 1.716 20.49-5.49 4.143-7.174 1.685-16.348-5.49-20.49z"></path>
                                        <path d="m466 212h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path>
                                        <path d="m91 227c0-8.284-6.716-15-15-15h-30c-8.284 0-15 6.716-15 15s6.716 15 15 15h30c8.284 0 15-6.716 15-15z"></path>
                                        <path d="m275.394 216.394-19.394 19.393-19.394-19.393c-5.857-5.858-15.355-5.858-21.213 0s-5.858 15.355 0 21.213l25.607 25.606v53.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.787l25.606-25.606c5.858-5.858 5.858-15.355 0-21.213-5.857-5.859-15.355-5.859-21.212 0z"></path>
                                      </g>
                                    </svg>
                                    <div class="media-body"><span>5-12 Category</span>
                                  
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank"><b>{{$cat3}}</a></td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media">
                                    <svg enable-background="new 0 0 512 512" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                      <g>
                                        <path d="m512 390v-390h-512v390h241v32h-15c-41.355 0-75 33.645-75 75v15h210v-15c0-41.355-33.645-75-75-75h-15v-32zm-226 62c19.556 0 36.239 12.539 42.43 30h-144.86c6.191-17.461 22.874-30 42.43-30zm-256-92v-330h452v330c-12.164 0-438.947 0-452 0z"></path>
                                        <path d="m136 180c24.813 0 45-20.187 45-45s-20.187-45-45-45-45 20.187-45 45 20.187 45 45 45zm0-60c8.271 0 15 6.729 15 15s-6.729 15-15 15-15-6.729-15-15 6.729-15 15-15z"></path>
                                        <path d="m184.568 197.848c-28.678-24.39-60.953-16.827-61.054-16.833-35.639 5.799-62.514 38.985-62.514 77.196v41.789h150v-45c0-22.034-9.634-42.865-26.432-57.152zm-3.568 72.152h-90v-11.789c0-23.666 16.049-44.122 37.332-47.584 13.509-2.198 26.578 1.38 36.801 10.074 10.083 8.577 15.867 21.078 15.867 34.299z"></path>
                                        <path d="m241 270h120v30h-120z"></path>
                                        <path d="m241 210h210v30h-210z"></path>
                                        <path d="m241 150h210v30h-210z"></path>
                                        <path d="m331 90h120v30h-120z"></path>
                                        <path d="m241 90h60v30h-60z"></path>
                                        <path d="m391 270h60v30h-60z"></path>
                                      </g>
                                    </svg>
                                    <div class="media-body"><span>13-18 Category</span>
                                    
                                    </div>
                                  </div>
                                </td>
                                <td><a href="#" target="_blank"><b>{{$cat4}}</a></td>
                              
                              </tr>
                           
                            </tbody>
                          </table>
                        </div>
                        <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#latest-update-sec" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                         
                        </div>
                      </div>
                    </div>
                  </div>
               <div class="row">   
                  <div class="col-xl-6 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                          <h5>Barangay List</h5>
                          <table class="table table-bordernone">                                         
                            <thead>
                              <tr>                                        
                                <th>Name</th>
                                <th>Total</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-1.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('britania.records')}}"><span>Britania</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p><b>{{$britania}}</b></p>
                                </td>
                             
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-2.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('buhisan.records')}}"><span>Buhisan</span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$buhisan}}</b></p>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-3.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('buatong.records')}}"><span>Buatong</span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$buatong}}</b></p>
                                </td>
                            
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-4.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('hornasan.records')}}"><span>Hornasan</span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$hornasan}}</b></p>
                                </td>
                              
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('janipaan.records')}}"><span>Janipaan                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$janipaan}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('kauswagan.records')}}"><span>Kauswagan                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$kauswagan}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('otieza.records')}}"><span>Otieza                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$otieza}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('poblacion.records')}}"><span>Poblacion                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$poblacion}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('pungtod.records')}}"><span>Pungtod                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$pungtod}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('pongon.records')}}"><span>Pong-on                                                   </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$pongon}}</b></p>
                                </td>
                               
                              </tr>
                              <tr>
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-5.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('salvacion.records')}}"><span>Salvacion                                                 </span></a></div>
                                  </div>
                                </td>
                                <td>
                                <p><b>{{$salvacion}}</b></p>
                                </td>
                               
                              </tr>

                            </tbody>
                          </table>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-6 recent-order-sec">
                    <div class="card">
                      <div class="card-body">
                        <div class="table-responsive">
                          <h5>List of Above 18 Age</h5>
                          <table class="table table-bordernone">                                         
                            <thead>
                              <tr>                                        
                                <th>Name</th>
                                <th>Age</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach($age as $data)
                                <td>
                                  <div class="media"><img class="img-fluid rounded-circle" src="../assets/images/dashboard/product-1.png" alt="" data-original-title="" title="">
                                    <div class="media-body"><a href="{{route('britania.records')}}"><span>{{$data->lastname}},{{$data->firstname}} {{$data->middlename}}</span></a></div>
                                  </div>
                                </td>
                                <td>
                                  <p><b>{{$data->age}}</b></p>
                                </td>
                             @endforeach
                              </tr>
                              
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
@section('js')



