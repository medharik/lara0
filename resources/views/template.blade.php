<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titre')</title>
</head>
<body>

    {{-- menu --}}
    <nav>
        <a href="/homes">Accueil</a>  | | <a href="/contacter">contact</a>
    </nav>
{{-- main --}}
<div>
<h1>@yield('titre')</h1>
    @yield('main')

</div>
@yield('form')
@yield('tableau')
    {{-- footer --}}
    <div>
        Copyright {{ date("d-m-Y") }} HM

    </div>
</body>
</html>
