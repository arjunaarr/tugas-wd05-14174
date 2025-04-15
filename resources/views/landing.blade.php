<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klinik Sehat</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header text-center mt-5">
            <h1>Selamat Datang di Klinik Sehat</h1>
            <p>Kami siap melayani Anda dengan sepenuh hati</p>
            <a href="{{ route('login') }}" class="btn btn-primary m-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success m-2">Register</a>
        </div>
    </div>
</div>
</body>
</html>
