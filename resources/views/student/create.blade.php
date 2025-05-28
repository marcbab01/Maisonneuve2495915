@extends('layouts.app')
@section('title', 'Add Student')
@section('content')
    <h1 class="mt-5 mb-4">Ajouter un Étudiant</h1>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ajouter un Étudiant</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('name') }}">
                            @if ($errors-has('name'))
                                <div class="text-danger mt-2">
                                    {{$errors-first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Adresse</label>
                            <input class="form-control" id="description" name="description" rows="3" value="{{ old('address') }}">
                            @if ($errors-has('address'))
                                <div class="text-danger mt-2">
                                    {{$errors-first('address')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Téléphone</label>
                            <input class="form-control" id="description" name="description" rows="3" value="{{ old('phone') }}">
                            @if ($errors-has('phone'))
                                <div class="text-danger mt-2">
                                    {{$errors-first('phone')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Email</label>
                            <input class="form-control" id="description" name="description" rows="3" value="{{ old('email') }}">
                            @if ($errors-has('email'))
                                <div class="text-danger mt-2">
                                    {{$errors-first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Date de Niassance</label>
                            <input class="form-control" id="description" name="description" rows="3" value="{{ old('birth') }}">
                            @if ($errors-has('birth'))
                                <div class="text-danger mt-2">
                                    {{$errors-first('birth')}}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Ville</label>
                            <input class="form-control" id="description" name="description" rows="3">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection