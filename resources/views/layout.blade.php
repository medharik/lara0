<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{  config('app.name') }} # @yield('title','titre de page par defaut')</title>
    <style>

        nav a{
            color: orangered;
            padding: 10px;
        }
    </style>
</head>
<body>
<nav style="width: 100%;padding: 10px;display: flex;justify-content: center;background: rgba(255, 255, 0, 0.422)">
    <a href="/accueil">Accueil </a>
    <a href="/about?">About</a>
    <a href="/home? ">Home</a>
</nav>
<main>
    @yield('content')

</main>
<footer  style="width: 100%;padding: 10px;position: absolute;bottom: 0;;display: flex;justify-content: center;background: rgba(255, 255, 0, 0.422);">
    {{ date('Y-m-d') }} OSBT
</footer>
</body>
</html>
