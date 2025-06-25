@extends('layouts.app')
@section('title', 'Create Article')
@section('content')

    <h1 class="mt-5 mb-4 text-center text-success">Créer un article</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5 class="alert-heading text-danger">Erreurs de validation</h5>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow border-success">
                <div class="card-header bg-success text-white text-center">
                    <h5 class="mb-0">Nouvel article</h5>
                </div>
                <div class="card-body bg-success-subtle">
                    <form method="POST" action="{{ route('article.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label text-success">Titre</label>
                            <input type="text" class="form-control border-success" id="title" name="title" required>
                        </div>
                        <div class="mb-4">
                            <label for="content" class="form-label text-success">Contenu</label>
                            <textarea class="form-control border-success" id="content" name="content"
                                      rows="6" required>{{ old('content') }}</textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Publier l'article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
