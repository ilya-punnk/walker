<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') </title>

    <!-- Styles -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all'>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container-fluid fill">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--Sidebar toogler -->
                    <button class="glyphicon glyphicon-menu-hamburger navbar-brand btn btn-link hidden-lg" id="burger_btn"></button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                    <!-- Right Side Of Navbar -->
                <div class="hidden-xs">
                    @include('_userMenu')
                </div>
            </div>
        </nav>

        <div class="row-fluid fill">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 fill" id="sidebar">
                <div class="fill block well" id="pad">
                    <div class="block-inside fill" id="sidebar-inside">
                        <div class="visible-xs">
                            @include('_userMenu')
                        </div>
                        @yield('sidebar')
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 fill block" id="content">
                <div class="block-inside fill" id="content-inside">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/templateRequire.js"></script>
</body>
</html>
