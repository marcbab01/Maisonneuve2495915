@extends('layouts.app')
@section('title', 'Registration')
@section('content')

<h1 class="text-center mt-5 mb-4 text-success">Créer un compte</h1>

<div class="row justify-content-center mt-4 mb-5">
  <div class="col-md-6 col-lg-5">
    <div class="card shadow border-success">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Inscription</h5>
      </div>
      <div class="card-body bg-success-subtle">
        <form method="POST">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label text-success">Nom</label>
            <input type="text" class="form-control border-success" id="name" name="name" value="{{ old('name') }}">
          </div>

          <div class="mb-3">
            <label for="username" class="form-label text-success">Courriel</label>
            <input type="email" class="form-control border-success" id="username" name="email" value="{{ old('email') }}">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label text-success">Mot de passe</label>
            <input type="password" class="form-control border-success" id="password" name="password">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-success">Créer le compte</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
