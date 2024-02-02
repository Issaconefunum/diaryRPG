@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <form action="{{route("buff.upload", $buff->id_buff)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                               value="{{$buff->name}}">
                    </div>
                    <div class="form-group">
                        <label for="strength" class="form-label">Сила</label>
                        <input type="text" name="strength" class="form-control" id="strength" placeholder="Сила"
                               value="{{$buff->strength}}">
                    </div>
                    <div class="form-group">
                        <label for="dexterity" class="form-label">Ловкость</label>
                        <input type="text" name="dexterity" class="form-control" id="dexterity" placeholder="Ловкость"
                               value="{{$buff->dexterity}}">
                    </div>
                    <div class="form-group">
                        <label for="intelligence" class="form-label">Интеллект</label>
                        <input type="text" name="intelligence" class="form-control" id="intelligence"
                               placeholder="Интеллект" value="{{$buff->intelligence}}">
                    </div>
                    <div class="form-group">
                        <label for="wisdom" class="form-label">Мудрость</label>
                        <input type="text" name="wisdom" class="form-control" id="wisdom" placeholder="Мудрость"
                               value="{{$buff->wisdom}}">
                    </div>
                    <div class="form-group">
                        <label for="specialEffect" class="form-label">Особый эффект</label>
                        <textarea type="text" name="specialEffect" class="form-control" id="specialEffect"
                                  placeholder="Особый эффект">{{$buff->specialEffect}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="timeOfAction" class="form-label">Продолжительность Действия</label>
                        <input type="text" name="timeOfAction" class="form-control" id="timeOfAction"
                               placeholder="Продолжительность действия" value="{{$buff->timeOfAction}}">
                    </div>
                    <hr align="center" width="100%" size="4" color="#000000"/>
                    <button type="submit" class="btn btn-primary btn-lg layer6_margin-top">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
