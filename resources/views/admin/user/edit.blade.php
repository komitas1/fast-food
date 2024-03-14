@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Редактирование</h3>
                </div>
                <form class="form-horizontal" action="/admin/users/{{$user->id}}" method="post" >
                    @csrf
                    @method("patch")
                    <div class="card-body">
                        <label class="col-sm-10">
                            Имя
                            <input type="text" class="form-control" placeholder="Имя" name="name" value="{{$user->name}}">
                        </label>
                        <label class="col-sm-10">
                            Ел. почта
                            <input type="email" class="form-control" placeholder="Ел. почта" name="email" value="{{$user->email}}">
                        </label>
                        <label class="col-sm-10">
                            Телефон
                            <input type="text" class="form-control" placeholder="Телефон" name="phone" value="{{$user->phone}}">
                        </label>
                        <label class="col-sm-10">
                            Роль
                            <select name="role" class="form-control">
                                <option value="1" @if($user->role == 1) selected @endif>Админ</option>
                                <option value="2" @if($user->role == 2) selected @endif>Пользователь</option>
                            </select>
                        </label>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
