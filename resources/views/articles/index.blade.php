@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create New Article</a>
    <div class="list-group mt-3">
        @foreach($articles as $article)
            <div class="list-group-item">
                <h5>{{ $article->title }}</h5>
                <p>{{ Str::limit($article->content, 100) }}</p>
                <small>By {{ $article->user->name }} on {{ $article->created_at->format('d M Y') }}</small>
                <a href="#" class="btn btn-link">Read More</a>
            </div>
        @endforeach
    </div>
</div>
@endsection