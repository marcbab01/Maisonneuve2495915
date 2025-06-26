@extends('layouts.app')
@section('title', 'Articles des étudiants')

@section('content')

    <h1 class="mt-5 mb-4 text-success">Articles des étudiants</h1>

    <div class="row">
        @forelse ($articles as $article)
            <div class="col-md-6">
                <div class="card mb-4 shadow border-success">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">{{ $article->title }}</h5>
                    </div>
                    <div class="card-body bg-success-subtle">
                        <p>{{ $article->content }}</p>
                        <hr>
                        <small>
                            <strong>@lang('lang.article_author') :</strong> {{ $article->user->name ?? 'Anonyme' }}<br>
                            <strong>@lang('lang.article_date') :</strong> {{ $article->created_at->format('d/m/Y') }}
                        </small>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-sm btn-outline-success">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger mt-4">@lang('lang.article_empty').</div>
        @endforelse
    </div>

@endsection
