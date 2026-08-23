<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>StockPilot - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css'); }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css'); }}">
    </head>
    <body>
        <div class="side-menu">
            <div class="logo">StockPilot</div>
            <nav>
                <a href="{{ route('dashboard') }}" class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('items.index') }}" class="nav-link {{ Route::currentRouteNamed('items.*') ? 'active' : '' }}">Items</a>
            </nav>
        </div>
        <div class="content-container">
            @yield('content')
        </div>
    </body>
</html>