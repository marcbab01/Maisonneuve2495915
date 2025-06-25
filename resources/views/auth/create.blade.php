@extends('layouts.app')
@section('title', trans('lang.login'))

@section('content')

    @if (!$errors->isEmpty())
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
            <h5 class="alert-heading text-danger">Erreurs de validation</h5>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow border-success">
                <div class="card-header bg-success text-white text-center">
                    <h5 class="fw-semibold mb-0">@lang('lang.login')</h5>
                </div>
                <div class="card-body bg-success-subtle">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label text-success">@lang('lang.username')</label>
                            <input type="email" class="form-control border-success" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-success">@lang('lang.password')</label>
                            <input type="password" class="form-control border-success" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">@lang('lang.login')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
