@extends('mainTop.top')
@section('main')
    <div class="task">
        @foreach($skills as $skill)
            <div>
                <p><a href="{{route('skill.show', $skill->id_skill)}}"> {{$loop->index+1}}. {{$skill->name}}</a></p>
                @if (now()->diffInDays($skill->lastUsed)>3)
                    {{'Навык не использовался более 3 дней'}}
                @endif
            </div>
        @endforeach
            <hr align="center" width="50%" size="4" color="#000000"/>
            <a class="btn btn-primary btn-lg" href="{{route('skill.create')}}" role="button">Добавить навык</a>
    </div>
@endsection
