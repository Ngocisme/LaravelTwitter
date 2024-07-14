<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    @foreach ($usersList as $user)
    <h3>
        {{$user['name']}}
        {{ $user['age']}} age
    </h3>
    <hr>
    @if ($user['age'] < 18)
    <p style="color: red">
        can't drive bro
    </p>
    @endif
   
    @endforeach

</body>
</html>