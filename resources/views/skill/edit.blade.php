@extends('mainTop.top')
@section('main')
    <div class="task">
        <div class="row">
            <div class="w-50">
                <form action="{{route("skill.upload", $skill->id_skill)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="name" class="form-label">Название</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                               value="{{$skill->name}}" >
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Описание</label>
                        <textarea type="text" name="description" class="form-control" id="description"
                                  placeholder="Описание" >{{$skill->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lastUsed" class="form-label">Последнее использование навыка</label>
                        <input type="text" name="lastUsed" class="form-control" id="lastUsed"
                               placeholder='Последнее использование' value="{{$skill->lastUsed}}" >
                    </div>
                    <br>
                    <div>
                        <select class="form-select align-top" name="lvlSkill_id" aria-label="class" >
                            <option selected value="{{$skill->lvlSkill_id}}">Выберите уровень навыка</option>
                            <option value="1">Обычный</option>
                            <option value="2">Редкий</option>
                            <option value="3">Эпический</option>
                        </select>
                    </div>
                    <hr align="center" width="100%" size="4" color="#000000"/>
                    <button type="submit" class="btn btn-primary btn-lg layer6_margin-top">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
