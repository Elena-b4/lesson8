@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input type="string" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Содержание</label>
                        <textarea class="form-control" name="content" rows="7"></textarea>
                    </div>
                    <div class=" form-group">
                        <label for="exampleFormControlSelect1">Категория</label>

                        <select class="form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark">Добавить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
