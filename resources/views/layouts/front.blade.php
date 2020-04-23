<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap/bootstrap.css') }}" />
    </head>
    <body>
        @include('layouts.front.auth')
        @include('layouts.front.dialog')
        @include('layouts.front.menu')
        <div class="container">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
        @include('layouts.front.footer');
        <script type="text/javascript" src="{{ URL::asset('js/jquery-2.0.3.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
        
        @yield('script')
        @yield('script_page')
        
    </body>
</html>