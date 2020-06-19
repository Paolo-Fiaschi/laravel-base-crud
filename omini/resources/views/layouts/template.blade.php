<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omini</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Link -->
        <link rel="stylesheet" href="{{asset ('css/app.css')}}">
        <script src="{{asset ('js/app.js')}}"></script>


    </head>
    <body>
        <header>
            <div class="container">
                <div class="row justify-content-center">
                    @include('components.header')
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                     @include('components.footer')
                </div>
            </div>
        </footer>
    </body>
</html>
