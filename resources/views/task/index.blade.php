@extends('mainTop.top')
@section('main')
    <div class="task">
        @foreach($tasks as $task)
            <div>
                <p><a href="{{route('task.show', $task->id_task)}}"> {{$loop->index+1}}. {{$task->name}}</a></p>
            </div>
        @endforeach
            <hr align="center" width="50%" size="4" color="#000000"/>
            <a class="btn btn-primary btn-lg" href="{{route('task.create')}}" role="button">Добавить задачу</a>
    </div>
@endsection
