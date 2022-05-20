<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inventory') }} | @yield('page_title') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js "></script>



    <script type="text/javascript">
        setTimeout(function() {
            $("#refresh").fadeOut(1000);
        }, 3000);
    </script>
</head>



<body>

    @if (session()->has('success'))
        <div class="alert alert-success" id="refresh" style="position:fixed; top:50px; right:15px; z-index:10000">
            <p>{!! session()->get('success') !!}</p>
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger" id="refresh" style="position:fixed; top:50px; right:15px; z-index:10000">
            <p>{!! session()->get('error') !!}</p>
        </div>
    @endif





    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand ms-4" href="#">
            Inventory
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inventory">Manage Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Warehouses">Warehouses</a>
                </li>
            </ul>
        </div>
    </nav>


    @yield('page_content')
{{--

    <footer class="footer">
        <div class="footer_container">
          <span class="text-muted">All right reserved @ {{ date('Y') }}.</span>
        </div>
    </footer> --}}

</body>

</html>
