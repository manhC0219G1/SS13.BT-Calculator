<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action ="{{route('cal')}}" method = "post">
    @csrf
    <input type="text" name = "describe"/>
    <input type="text" name = "price"/>
    <input type="text" name = "discount"/>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
