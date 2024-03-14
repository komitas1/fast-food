@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                <tr class="bg-gradient-gray">
                    <th scope="col">№</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Ел. почта</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Роль</th>
                    <th scope="col">Дата создания</th>
                    <th scope="col">Дата обновления</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->role == 1?'Админ':'Пользователь'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-primary btn-sm" href="/admin/users/{{$user->id}}">
                                <i class="fas fa-folder">
                                </i>
                                Посматреть
                            </a>
                            <a class="btn btn-info btn-sm" href="/admin/users/{{$user->id}}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>
                            <form action="/admin/users/{{$user->id}}" method="Post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" href="/admin/users/{{$user->id}}" >
                                    <i class="fas fa-trash"></i>
                                    Удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
