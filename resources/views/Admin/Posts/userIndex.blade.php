@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-6">
            @foreach($posts as $post)
                <div class="card text-center m-4">
                    <div class="card-header">
                        <p class="card-text">Пост №{{ $post->id }}</p>
                        <p class="card-text">Автор: {{ $post->user->name }}</p>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Категория: {{ $post->category->title }}
                    </div>
                </div>@endforeach
            {{ $posts->links('vendor/pagination.bootstrap-4') }}
        </div>
    </div>
@endsection
