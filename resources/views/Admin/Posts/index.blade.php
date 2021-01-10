@extends('layouts.admin')
@section('content')
    <div class="container">
    <div class="col-6">
        @foreach($posts as $post)
            <div class="card text-center m-4">
                <div class="card-header">
                    <a href="{{ route('admin.posts.show', $post->id) }}">Пост №{{ $post->id }}</a>
                    <p class="card-text">Автор: {{ $post->user->name }}</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>

                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-secondary">Редактировать</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="Post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-dark m-2" type="submit">Удалить</button>
                        </form>

                </div>
                <div class="card-footer text-muted">
                    Категория: {{ $post->category->title }}
                </div>
            </div>@endforeach
        {{ $posts->links('vendor/pagination.bootstrap-4') }}
    </div>
    </div>
@endsection
