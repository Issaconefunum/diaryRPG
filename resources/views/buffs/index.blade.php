@extends('mainTop.top')
@section('main')
    <div class="task">
        @foreach($buffs as $buff)
            <div>
                <p><a href="{{route('buff.show', $buff->id_buff)}}"> {{$loop->index+1}}. {{$buff->name}}</a></p>
            </div>
        @endforeach
            <hr align="center" width="50%" size="4" color="#000000"/>
            <a class="btn btn-primary btn-lg" href="{{route('buff.create')}}" role="button">Добавить Бафф</a>
    </div>
@endsection
