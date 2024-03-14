@section('title', 'Категории')
@extends('adminlte::page')
@section('content')
    <div class="card">
        <div class="card-tools w-96 justify-content-end d-flex m-3">
            <a class="btn btn-success"  href="/admin/categories/create">Добавить</a>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                <tr class="bg-gradient-gray">
                    <th scope="col">№</th>
                    <th scope="col">Название</th>
                    <th scope="col">Дата создания</th>
                    <th scope="col">Дата обновления</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                      <tr>
                          <th scope="row">{{$category->id}}</th>
                          <td>{{$category->name}}</td>
                          <td>{{$category->created_at}}</td>
                          <td>{{$category->updated_at}}</td>
                          <td class="d-flex justify-content-around">
                                  <a class="btn btn-info btn-sm" href="/admin/categories/{{$category->id}}/edit">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Редактировать
                                  </a>
                                  <form action="/admin/categories/{{$category->id}}" method="Post" style="display: inline">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm" href="/admin/categories/{{$category->id}}" >
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
