@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <form action="{{route("buff.store")}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <label for="strength" class="form-label">Сила</label>
                        <input type="text" name="strength" class="form-control" id="strength" placeholder="Сила">
                    </div>
                    <div class="form-group">
                        <label for="dexterity" class="form-label">Ловкость</label>
                        <input type="text" name="dexterity" class="form-control" id="dexterity" placeholder="Ловкость">
                    </div>
                    <div class="form-group">
                        <label for="intelligence" class="form-label">Интеллект</label>
                        <input type="text" name="intelligence" class="form-control" id="intelligence" placeholder="Интеллект">
                    </div>
                    <div class="form-group">
                        <label for="wisdom" class="form-label">Мудрость</label>
                        <input type="text" name="wisdom" class="form-control" id="wisdom" placeholder="Мудрость">
                    </div>
                    <div class="form-group">
                        <label for="specialEffect" class="form-label">Особый эффект</label>
                        <textarea type="text" name="specialEffect" class="form-control" id="specialEffect"
                                  placeholder="Особый эффект"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="timeOfAction" class="form-label">Продолжительность Действия</label>
                        <input type="text" name="timeOfAction" class="form-control" id="timeOfAction" placeholder="Продолжительность действия">
                    </div>
                    <hr align="center" width="100%" size="4" color="#000000"/>
                    <div class="layer5_margin-top">
                        <button type="submit" class="btn btn-primary btn-lg">Добавить бафф</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
