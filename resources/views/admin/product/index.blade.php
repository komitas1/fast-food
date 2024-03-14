@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
    <div class="card">
            <div class="card-tools w-96 justify-content-end d-flex m-3">
                <a class="btn btn-success"  href="/admin/products/create">Добавить</a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                    <tr class="bg-gradient-gray">
                        <th scope="col">№</th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Сорт</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col">Дата обновления</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->categories->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->sort}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                            <td class="d-flex justify-content-around">
                                <a class="btn btn-primary btn-sm" href="/admin/products/{{$product->id}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Посматреть
                                </a>
                                <a class="btn btn-info btn-sm" href="/admin/products/{{$product->id}}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form action="/admin/products/{{$product->id}}" method="Post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" href="/admin/products/{{$product->id}}" >
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
