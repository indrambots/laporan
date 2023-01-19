<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/fontawesome-all.min.css')}}">
    <!-- Vegas CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/vegas.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/GSA/fa/css/font-awesome.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/login/style.css')}}">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout29">
        <div class="container-fluid">
            <div class="row">
                <div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide" data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{ asset('media/bg/1.jpeg') }}"},{"src": "{{ asset('media/bg/2.jpeg') }}"},{"src": "{{ asset('media/bg/3.jpeg') }}"}   ]}'>
                    <div class="fxt-page-switcher">
                        <a href="login-29.html" class="switcher-text1 active">Login</a>
                    </div>
                </div>

                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            {{-- <a style="margin-bottom: 50px" href="login-29.html" class="fxt-logo"><img src="{{ asset('assets/img/sigis.png') }}" alt="Logo"></a> --}}
                        </div>
                        <div class="fxt-form">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                               <img src="{{url('media/bg/logo.png')}}">
                               <h2>LOGIN</h2>
                            </div>
                            <form method="POST" action="{{ url('login') }}" >
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                                        <i class="flaticon-user"></i>
                                        @error('username')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-6">
                                        <div class="fxt-content-between">
                                            @if($errors->has('throttle'))
                                                <button type="submit" disabled class="btn btn-warning col-12 " style="margin-bottom:10px;">LOG IN</button>
                                            @else
                                                <button type="submit"  class="btn btn-warning col-12 " style="margin-bottom:10px;">LOG IN</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('assets/login/js/jquery-3.5.0.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets/login/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/login/js/bootstrap.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('assets/login/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Vegas js -->
    <script src="{{ asset('assets/login/js/vegas.min.js')}}"></script>
    <!-- Validator js -->
    <script src="{{ asset('assets/login/js/validator.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/login/js/main.js')}}"></script>

</body>

</html>
