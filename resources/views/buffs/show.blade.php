@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <div class="form-group">
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                               value="{{$buff->name}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="strength" class="form-label">Сила</label>
                        <input type="text" name="strength" class="form-control" id="strength" placeholder="Сила"
                               value="{{$buff->strength}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="dexterity" class="form-label">Ловкость</label>
                        <input type="text" name="dexterity" class="form-control" id="dexterity" placeholder="Ловкость"
                               value="{{$buff->dexterity}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="intelligence" class="form-label">Интеллект</label>
                        <input type="text" name="intelligence" class="form-control" id="intelligence"
                               placeholder="Интеллект" value="{{$buff->intelligence}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="wisdom" class="form-label">Мудрость</label>
                        <input type="text" name="wisdom" class="form-control" id="wisdom" placeholder="Мудрость"
                               value="{{$buff->wisdom}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="specialEffect" class="form-label">Особый эффект</label>
                        <textarea type="text" name="specialEffect" class="form-control" id="specialEffect"
                                  placeholder="Особый эффект" readonly>{{$buff->specialEffect}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="timeOfAction" class="form-label">Продолжительность Действия</label>
                        <input type="text" name="timeOfAction" class="form-control" id="timeOfAction"
                               placeholder="Продолжительность действия" value="{{$buff->timeOfAction}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="timeEnd" class="form-label">Конец действия баффа:</label>
                        <input type="text" name="timeEnd" class="form-control" id="timeEnd"
                               placeholder="Продолжительность действия" value="{{$buff->timeEnd}}" readonly>
                    </div>
                </div>
                <hr align="center" width="100%" size="4" color="#000000"/>
            </div>

            <div>
                <div>
                    <form class="layer6_margin-top" action="{{route('buff.delete', $buff->id_buff)}}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-primary btn-lg" href="{{route('buff.edit', $buff->id_buff)}}">Изменить</a>
                        <button type="submit" class="btn btn-primary btn-lg">Удалить задачу</button>
                        <a class="btn btn-primary btn-lg" href="{{route('buff.index')}}">Назад</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
