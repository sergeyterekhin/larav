<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport'
    content="width=device-width, user-scalable=no,inital-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вкладка home</title>
</head>

<body>
<form action="{{route('contact')}}" method="POST">
@csrf{{--тоже самое что и снизу только удобнее --}}
     {{--{{ csrf_field() }} токен который разрешает post запрос, без него ошибка 419  --}}
 <input type="text" name="name">
 <input type="email" name="email">
 <button type="submit">Click</button>   

</form>
</body>

</html>
