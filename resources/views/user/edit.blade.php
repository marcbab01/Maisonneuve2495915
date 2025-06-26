@extends('layouts.app')
@section('title', trans('lang.edit_user_title'))
@section('content')

<div class="row justify-content-center mt-4 mb-5">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow border-success">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">@lang('lang.edit_user_title')</h5>
      </div>
      <div class="card-body bg-success-subtle">
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label text-success">@lang('lang.user_name')</label>
            <input type="text" class="form-control border-success" id="name" name="name" value="{{ old('name') }}">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label text-success">@lang('lang.username')</label>
            <input type="email" class="form-control border-success" id="username" name="email" value="{{ old('email') }}">
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-success">@lang('lang.edit_user_btn')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
