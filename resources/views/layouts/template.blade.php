<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title') </title>
    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all'>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!--debug-->
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="cache-control" content="must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

</head>
<body>


<div class="container-fluid fill">
    @include('_navbar')

    <div class="row-fluid fill">
        <div class="col-lg-3 visible-lg fill sidebar">
            <div class="well pre-scrollable fill sidebar-container">@yield('sidebar')</div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-6 col-lg-9 col-lg-offset-0 fill" id="content">@yield('content')</div>
        <div class="col-sm-12 col-xs-12 col-md-6 hidden-lg overlay fill sidebar" id="sidebar-collapsable">
            <div class="well pre-scrollable fill sidebar-container">@yield('sidebar')</div>
        </div>
    </div>

</div>

<script>


</script>
@yield('scripts')
</body>
</html>