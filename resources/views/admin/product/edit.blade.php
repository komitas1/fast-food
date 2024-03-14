@section('title', 'Дашборд')
@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Редактирование</h3>
                </div>
                <form class="form-horizontal" action="/admin/products/{{$product->id}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method("patch")
                    <div class="card-body">
                        <label class="col-sm-10">
                            Название
                            <input type="text" class="form-control" placeholder="Название" name="name" value="{{$product->name}}">
                        </label>
                        <label class="col-sm-10">
                            Цена
                            <input type="number" class="form-control" placeholder="Цена" name="price" value="{{$product->price}}">
                        </label>
                        <label class="col-sm-10">
                            Категория
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </label>

                        <label class="col-sm-10">
                            Сортировать
                            <input type="number" class="form-control" placeholder="Сортировать" name="sort" value="{{$product->sort}}">
                        </label>
                        <label class="col-sm-10">
                            Изображение
                            <input class="form-control" type="file" name="image" accept="image/*"
                                   onchange="loadFile(event)" value="">
                            <img id="output" alt="Изображение" src="{{$image??'/images/product.svg'}}"/>
                        </label>
                        <div id="imagePreview"></div>

                        <label class="col-sm-10">
                            Описание
                            <textarea class="form-control" name="description" placeholder="Описание">
                              {{$product->description}}
                            </textarea>
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
<style>
    /* Стили для предварительного просмотра изображения */
    #imagePreview {
        max-width: 100%; /* Ширина предварительного просмотра не больше контейнера */
        margin-top: 10px; /* Добавьте необходимые отступы здесь */
    }

    #imagePreview img {
        max-width: 100%; /* Ширина изображения не больше контейнера */
        height: auto; /* Автоматическое изменение высоты */
    }

    img {
        width: 140px;
        height: 100px;
    }

    /*input[type='file']{*/
    /*    width: 100px;*/
    /*}*/
</style>
<script>
    let loadFile = function (event) {
        let output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
