@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <div class="form-group">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                           value="{{$task->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Описание</label>
                    <textarea type="text" name="description" class="form-control" id="description"
                              placeholder="Описание" readonly>{{$task->description}}</textarea>
                </div>
            </div>
        </div>
        <hr align="center" width="50%" size="4" color="#000000"/>
        <div>
            <div>
                <form class="layer6_margin-top" action="{{route('task.delete', $task->id_task)}}" method="post">
                    @csrf
                    @method('delete')
                    <a class="btn btn-primary btn-lg" href="{{route('task.edit', $task->id_task)}}">Изменить</a>
                    <button type="submit" class="btn btn-primary btn-lg">Удалить задачу</button>
                    <a class="btn btn-primary btn-lg" href="{{route('task.index')}}">Назад</a>
                </form>
            </div>
        </div>
@endsection
