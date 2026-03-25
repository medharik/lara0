<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nouveau calcul</title>
</head>
<body>
    <h1>Nouveau calcul</h1>
    <form action="{{ url('calcul/somme') }}" method="post">
    @csrf
        <input type="text" name="a" id="" placeholder="Entrer le nombre 1">
        <input type="text" name="b" id="" placeholder="Entrer le nombre 2">
    <button>+</button>
    </form>

</body>
</html>
