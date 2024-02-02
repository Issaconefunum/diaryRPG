<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/styels.css') }}">
</head>
<body>
<div class="big-text">
    <div class="layer3">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link" href="{{route('main.profile')}}">Профиль</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('task.index')}}">Задачи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('buff.index')}}">Баффы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('skill.index')}}">Навыки</a>
            </li>
        </ul>
    </div>
</div>
<div class="layer1">
    <hr align="center" width="50%" size="4" color="#000000"/>
</div>
@yield('main')
</body>
</html>
