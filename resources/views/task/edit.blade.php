@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <form action="{{route("task.upload", $task->id_task)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                               value="{{$task->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Описание</label>
                        <textarea type="text" name="description" class="form-control" id="description"
                                  placeholder="Описание">{{$task->description}}</textarea>
                    </div>
                    <hr align="center" width="100%" size="4" color="#000000"/>
                    <button type="submit" class="btn btn-primary btn-lg layer6_margin-top">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
