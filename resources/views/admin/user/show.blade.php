@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
    @php
        @endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Пользователи</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height:100%">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                        <tr>
                            <td>№</td>
                            <td>
                                {{$user->id}}
                            </td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>
                                {{$user->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>Ел. почта</td>
                            <td>
                                {{$user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>
                                {{$user->phone}}
                            </td>
                        </tr>
                        <tr>
                            <td>Роль</td>
                            <td>
                                {{$user->role == 1?'Админ':'Пользователь'}}
                            </td>
                        </tr>
                        <tr>
                            <td>Дата создания</td>
                            <td>
                            {{$user->created_at}}
                        </tr>
                        <tr>
                            <td>Дата обновления</td>
                            <td>
                                {{$user->updated_at}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
