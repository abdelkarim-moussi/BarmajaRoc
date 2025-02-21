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
    <div class="article">
        <h2>{{ $article->title }}</h2>
        @if($article->cover)
            <img src="{{ asset('storage/' . $article->cover) }}" alt="Cover Image" style="max-width: 100%; height: auto;">
        @endif
        <p>{{ $article->content }}</p>
        <a href="#" class="btn btn-link">Read More</a>
    </div>
@endforeach
    </div>
</div>
@endsection