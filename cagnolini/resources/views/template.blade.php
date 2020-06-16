<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <header>
        @include('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('footer')
    </footer>
</body>
</html>
