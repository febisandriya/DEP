<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="{{url('SuperAdmin/assets/img/apple-icon.png')}}"> -->
     <link rel="shortcut icon" href="../images/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Login</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{url('SuperAdmin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('SuperAdmin/assets/css/material-kit.css')}}" rel="stylesheet"/>

</head>

<body class="signup-page">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
        </div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('../SuperAdmin/assets/img/city.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="POST" action="{{route('superadmin.login')}}">
                                {{ csrf_field() }} 
                                
                                <div class="header header-primary text-center">
                                    <h4>Login</h4>
                                </div>
                                <p class="text-divider"></p>
                                <div class="content">

                                    <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email..." required value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                         @endif
                                    </div>

                                    <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" name="password" id="password" placeholder="Password..." class="form-control" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <!-- If you want to add a checkbox to this form, uncomment this code

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes" checked>
                                            Subscribe to newsletter
                                        </label>
                                    </div> -->
                                </div>
                                <div class="footer text-center">
                                    <button href="#pablo" type="submit" class="btn btn-simple btn-primary btn-lg">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!-- 
            <footer class="footer">
                <div class="container">
                    <div class="copyright pull-right">
                        &copy; 2018 by Magang TI</a>
                    </div>
                </div>
            </footer> -->

        </div>

    </div>


</body>
    <!--   Core JS Files   -->
    <script src="{{url('SuperAdmin/assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{url('SuperAdmin/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{url('SuperAdmin/assets/js/material.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      @if (session()->has('success'))
        swal("Berhasil", "{{ session()->get('success') }}", "success");
        {{ session()->forget('success') }}
      @elseif(session()->has('warning'))
        swal("Gagal", "{{ session()->get('warning') }}", "error");
        {{ session()->forget('warning') }}
      @endif
    });
    </script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{url('SuperAdmin/assets/js/nouislider.min.js')}}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{url('SuperAdmin/assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{url('SuperAdmin/assets/js/material-kit.js')}}" type="text/javascript"></script>

</html>
