<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Urodatanesia</title>
    <link rel="manifest" href="{{url('')}}/manifestv1.1.json" />
    <!-- ios support -->
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-72x72.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-96x96.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-128x128.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-144x144.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-152x152.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-192x192.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-384x384.png" />
    <link rel="apple-touch-icon" href="{{url('')}}/images/icons-urodatanesia/icon-512x512.png" />
    <meta name="apple-mobile-web-app-status-bar" content="#f8bf1f" />
    <meta name="theme-color" content="#f8bf1f" />

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/plugins/sweetalert2.min.css')}}">
    <link rel="icon" sizes="512x512" href="{{url('')}}/images/icons-urodatanesia/icon-512x512.png">

    
    
    <link rel="stylesheet" href="{{url('')}}/css/select2-bootstrap4.css">
    <link href="{{url('')}}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{url('')}}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="{{url('')}}/css/font-awesome.css" rel="stylesheet" />
    <link href="{{url('')}}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{url('')}}/css/argon-design-system.css?v=1.0.2" rel="stylesheet" />
    <link href="{{url('')}}/css/appv1.3.css" rel="stylesheet" />

    <link href="/images/icons-urodatanesia/splash-640x1136.png" 
    media="(min-device-width: 320px) and (min-device-height: 568px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-750x1334.png" 
    media="(min-device-width: 375px) and (min-device-height: 667px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1242x2208.png" 
    media="(min-device-width: 621px) and (min-device-height: 1104px) and (-webkit-min-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1125x2436.png" 
    media="(min-device-width: 375px) and (min-device-height: 812px) and (-webkit-min-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-828x1792.png" 
    media="(min-device-width: 414px) and (min-device-height: 896px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1242x2688.png" 
    media="(min-device-width: 414px) and (min-device-height: 896px) and (-webkit-min-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1536x2048.png" 
    media="(min-device-width: 768px) and (min-device-height: 1024px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1668x2224.png" 
    media="(min-device-width: 834px) and (min-device-height: 1112px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-1668x2388.png" 
    media="(min-device-width: 834px) and (min-device-height: 1194px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="/images/icons-urodatanesia/splash-2048x2732.png" 
    media="(min-device-width: 1024px) and (min-device-height: 1366px) and (-webkit-min-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons-urodatanesia/icon-512x512.png">

    <script type="text/javascript">
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('{{url('')}}/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>   


    <style type="text/css">
        .globalLoading
        {
            width: 100%;
            position: fixed;
            top:20vh;
            text-align:center;
            z-index: 10000;
        }
        .globalLoading i
        {
            background: white;
            padding: 5px;
            border-radius: 50%;
        }
    </style>


</head>
<body>
    <div id="app">
        @guest
        @else
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('')}}/images/logo-urodatanesia.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-primary">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ url('/') }}">
                                    <img src="{{url('')}}/images/logo-urodatanesia.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
                                @if(Auth::user()->admin)
                                <a class="dropdown-item" href="{{url('admin')}}">Admin</a>
                                @endif
                                <a class="dropdown-item" href="{{url('settings')}}">Settings</a>
                                <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif

        @yield('content')


      <!--   <footer class="footer">
            <div class="container">
                <div class="row align-items-center justify-content-md-between">
                    <div class="col-md-6">
                        <div class="copyright">
                            &copy; 2020 <a href="" target="_blank">Urodatanesia</a>.
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->

    </div>
    <div id="globalLoading" class="globalLoading" style="display: none"> <i class="fa fa-spinner fa-spin text-primary fa-2x"></i> </div>

    <!-- Scripts -->
    <script src="{{url('')}}/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{url('')}}/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{url('')}}/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
    <script src="{{url('')}}/js/plugins/glide.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
    <script src="{{url('')}}/js/plugins/moment.min.js"></script>
    <!--  Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
    <script src="{{url('')}}/js/plugins/choices.min.js" type="text/javascript"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
    <script src="{{url('')}}/js/plugins/datetimepicker.js" type="text/javascript"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{url('')}}/js/plugins/jasny-bootstrap.min.js"></script>
    <!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
    <script src="{{url('')}}/js/plugins/headroom.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="{{url('')}}/js/argon-design-system.min.js?v=1.0.2" type="text/javascript"></script>

    



    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{asset('js/plugins/sweetalert2.min.js')}}"></script>

    <script type="text/javascript">
        $('.js-select2').select2({
            theme: 'bootstrap4',
        });

        $('.form-check-input-yes-no').change(function() {
            value = this.value;
            name = this.name;

            $("input[name="+name+"]").parent().removeClass('active');
            $("input[name="+name+"][value="+value+"]").parent().addClass('active');
        });

    </script>   


    @if (session('status') == 1)
    <script type="text/javascript">
        swal({
          type: 'success',
          title: "{{session('title')}}",
          text: "{{ session('message') }}",
      });
    </script>

    @elseif (session('status') == -1)

    <script type="text/javascript">
        swal({
          type: 'error',
          title: "{{session('title')}}",
          text: "{{ session('message') }}",
      });
    </script>
    @endif 

    <script type="text/javascript">
        $('a').click(function(event){
            if($(this).hasClass('disable-loading')) return
            var href = $(this).attr('href');
            if(href != '')
                $('#globalLoading').show();
        })
        $('form').submit(function(){
            $('#globalLoading').show();
        })
    </script>

    @yield('js')
</body>
</html>
