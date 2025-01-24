<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>MSWD - PROFILING SYSTEM</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('public/mswd_design/assets/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/icofont.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/themify.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/flag-icon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/feather-icon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/chartist.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/date-picker.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/prism.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/vector-map.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('public/mswd_design/assets/css/color-1.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">
    <link href="{{ URL::asset('public/mswd_design/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
    
  </head>
    <body>
        
    <section>         
        
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
        
  
            <div class="login-card">
         
              <form class="theme-form login-form" method="POST" action="{{route('loginpost')}}">
              @csrf
              <center><img src="{{ URL::asset('public/logo_mswd.jpg') }}" alt="" style="width:200px;"> </a></center>
                <h4>Login</h4>
                <h6>Welcome back! Log in to your account.</h6>
                
            
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  </div>
                </div>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>

                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </div>
              
               
               
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    </body>
    <script src="{{asset('public/js/app.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/jquery-3.5.1.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/icons/feather-icon/feather.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/icons/feather-icon/feather-icon.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/sidebar-menu.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/config.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/bootstrap/popper.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/bootstrap/bootstrap.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/chartist/chartist.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/knob/knob.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/knob/knob-chart.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/apex-chart/stock-prices.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/chart/apex-chart/apex-chart.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/prism/prism.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/clipboard/clipboard.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/counter/jquery.waypoints.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/counter/jquery.counterup.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/counter/counter-custom.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/custom-card/custom-card.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/notify/bootstrap-notify.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-au-mill.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-in-mill.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/dashboard/default.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/notify/index.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/datepicker/date-picker/datepicker.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/datepicker/date-picker/datepicker.en.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/datepicker/date-picker/datepicker.custom.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/script.js')}}" ></script>
    <script src="{{asset('public/mswd_design/assets/js/theme-customizer/customizer.js')}}" ></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
   
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>