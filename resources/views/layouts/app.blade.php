<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modified.css') }}" rel="stylesheet">
    <!--PWA Script-->
        <!-- <script>
          if ('serviceWorker' in navigator && 'PushManager' in window) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
        </script> -->
</head>
<body class="body-color">

    <div class="wrapper">
        <!-- Sidebar  -->
        @include('layouts/sidebar')

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-dark bg-dark navbar-fixed-top">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark navbar-toggler ">
                        <i class="fas fa-bars font-color"></i>
                    </button>
                        <input id="searchBar" type="text" class="btn-transparent" onfocus="this.placeholder='Search..'" onblur="this.placeholder=''">
                        <i id="fixed-search" class="fas fa-search font-color fixed-search float-right"></i>
                    </button>
                </div>
            </nav>
    @yield('content')
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('#fixed-search').on('click', function(){
                console.log($('#searchBar').hasClass("active"));
                if($('#searchBar').hasClass("active")){
                    $('#searchBar').blur();
                    $('#searchBar').removeClass('active');
                }else{
                    $('#searchBar').focus();
                    $('#searchBar').addClass('active');
                }
            });
        });
    </script>
</body>
@include('layouts/footer')
</html>
