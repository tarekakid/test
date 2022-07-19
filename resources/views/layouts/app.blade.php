<!DOCTYPE html>
<title>@yield('title')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="UTF-8">
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<body>
    <div class="main-wrapper">
        <div class="content">

            <!-- ***** Header Start ***** -->
            @include('templates.header')

            @yield('section')
            <!--====== Modal Responsive Menu Area End ======-->

        </div>

        <!--====== Footer Area Start ======-->
        @include('templates.footer')


    </div>

    @yield('script')

</body>

</html>
