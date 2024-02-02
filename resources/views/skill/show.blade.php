@extends('mainTop.top')
@section('main')
    <?php use App\Models\lvlSkill;?>
    <div class="task">
        <div class="row">
            <div class="w-50">
                <div class="form-group">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Название"
                           value="{{$skill->name}}" readonly>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Описание</label>
                    <textarea type="text" name="description" class="form-control" id="description"
                              placeholder="Описание" readonly>{{$skill->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="lastUsed" class="form-label">Последнее использование навыка</label>
                    <input type="text" name="lastUsed" class="form-control" id="lastUsed"
                           placeholder='Последнее использование' value="{{$skill->lastUsed}}" readonly>
                </div>
                <br>
                <div>
                    <select class="form-select" name="lvlSkill_id" aria-label="class" disabled readonly>
                        <option selected readonly>{{lvlSkill::find($skill->lvlSkill_id)->name}}</option>
                        <option value="1">Обычный</option>
                        <option value="2">Редкий</option>
                        <option value="3">Эпический</option>
                    </select>
                </div>
                <hr align="center" width="100%" size="4" color="#000000"/>
                <form class="layer6_margin-top" action="{{route('skill.delete', $skill->id_skill)}}" method="post">
                    @csrf
                    @method('delete')
                    <a class="btn btn-primary btn-lg" href="{{route('skill.edit', $skill->id_skill)}}">Изменить</a>
                    <button type="submit" class="btn btn-primary btn-lg">Удалить навык</button>
                    <a class="btn btn-primary btn-lg" href="{{route('skill.index')}}">Назад</a>
                </form>
            </div>
        </div>
@endsection
