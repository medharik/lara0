<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dcalculevice-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire de soustraction</title>
</head>
<body>
    <form action="{{ url('/calcul/soustraction') }}" method="post">
        @csrf
        <input type="text" name="a" placeholder="Entrer a" id="">
        <input type="text" name="b" placeholder="Entrer b" id="">
        <button>-</button>
    </form>

</body>
</html>
