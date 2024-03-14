@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
 @php
 @endphp
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Продукт</h3>
                    </div>
                    <div class="card-body table-responsive p-0" style="height:100%">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td>№</td>
                                <td>
                                    {{$product->id}}
                                </td>
                            </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>
                                        {{$product->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>
                                        {{$product->categories->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>
                                        {{$product->description}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>
                                        {{$product->price}}
                                </tr>
                                <tr>
                                   <td>Сорт</td>
                                    <td>
                                        {{$product->sort}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Дата создания
                                    </td>
                                    <td>
                                        {{$product->created_at}}
                                    </td>
                                </tr>
                            <tr>
                                <td>Дата обновления</td>
                                <td>{{$product->updated_at}}</td>
                            </tr>
                            <tr>
                                <td>Изображение</td>
                                <td>
                                    <img src="{{$image??'/images/product.svg'}}" alt="Изображение">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
@endsection
<style>
    img {
        width: 160px;
        height: 120px;
    }

</style>
