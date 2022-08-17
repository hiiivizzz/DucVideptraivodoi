<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web cua toi</title>
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}">
</head>
<body>
    @include('layouts/block/header');
    <main>
        <aside>
       
        </aside>
        <div class="content">
            @yield('content')
        </div>
    </main>
    @include('layouts/block/footer');
    <script src="{{asset('client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('js')
    @stack('scripts')
</body>
</html>