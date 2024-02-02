@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <form action="{{route("task.store")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Описание</label>
                        <textarea type="text" name="description" class="form-control" id="description"
                                  placeholder="Описание"></textarea>
                    </div>
                    <hr align="center" width="100%" size="4" color="#000000"/>
                    <div class="layer5_margin-top">
                        <button type="submit" class="btn btn-primary btn-lg">Создать задачу</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
