@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Добавление</h3>
                </div>
                <form class="form-horizontal" action="/admin/categories" method="post">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <label class="col-sm-10">
                            Название
                            <input type="text" class="form-control" placeholder="Название" name="name">
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
