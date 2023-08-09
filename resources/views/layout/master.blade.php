<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Homestay</title>
    <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
</head>
<body>
    <!-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed"> -->
    @include('layout.navbar')
    @yield('content')
    <!-- </div> -->
    <script src="{{asset('js/app.min.js')}}"></script>
</body>
</html>