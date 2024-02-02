@extends('mainTop.top')
@section('main')
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
<div class="layer1"><h5>Имя Персонажа: {{$character->name}} <br>Класс: {{$character->race->name}} <br>Опыт:</h5>
    <div class="w-50">
        <div class="progress" role="progressbar" aria-label="experience" aria-valuenow='{{$character->experience}}' aria-valuemin="0"
             aria-valuemax="100">
            <div class="progress-bar" style="width: {{$character->experience}}%">{{$character->experience}}%</div>
            </p>
        </div>
    </div>
</div>
<div class="layer1">
    <hr align="center" width="50%" size="4" color="#000000"/>
</div>
<div class="layer1"><img class="rounded float-start" src="{{asset('воин3.jpg')}}" align="left" alt="">
    <p><h5>Характеристики:</h5></p>
    <p>Сила: <b>{{$character->strength}}</b></p>
    <p>Ловкость: <b>{{$character->dexterity}}</b></p>
    <p>Интеллект:<b>{{$character->intelligence}}</b></p>
    <p>Мудрость: <b>{{$character->wisdom}}</b></p>
</div>

<div class="layer1">
    <p align="left"><h5>Баффы:</h5></p>
    @foreach($character->buffs as $buff)
        <div>{{$loop->index+1}}. {{$buff->name}}</div>
    @endforeach
</div>

</body>
</html>
@endsection
