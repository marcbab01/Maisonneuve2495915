@extends('layouts.app')
@section('title', trans('lang.edit_user_title'))
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5 shadow border-success">
                <div class="card-body bg-success-subtle">
                    <ul class="list-unstyled mb-0">
                        <li><strong>@lang('lang.article_title'):</strong> {{ $article->title }}</li>
                        <li><strong>@lang('lang.article_content'):</strong> {{ $article->content }}</li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between bg-white">
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-outline-success">@lang('lang.edit_user_btn')</a>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        @lang('lang.delete_btn')
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="deleteModalLabel">DELETE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this User?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
