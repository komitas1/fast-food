@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Редактирование</h3>
                    </div>
                    <form class="form-horizontal" action="/admin/categories/{{$category->id}}" method="post" >
                        @csrf
                        @method("patch")
                        <div class="card-body">
                            <label class="col-sm-10">
                                Название
                                <input type="text" class="form-control" placeholder="Название" name="name" value="{{$category->name}}">
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
