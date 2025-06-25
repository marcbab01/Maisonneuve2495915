@extends('layouts.app')
@section('title', 'Users List')
@section('content')

    <h1 class="mt-5 mb-4 text-success">Liste des Utilisateurs</h1>

    <div class="row">
        @forelse ($users as $user)
            <div class="col-md-6">
                <div class="card mb-4 shadow border-success">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">{{ $user->name }}</h5>
                    </div>
                    <div class="card-body bg-success-subtle">
                        <ul class="list-unstyled mb-0">
                            <li><strong>Id:</strong> {{ $user->id }}</li>
                            <li><strong>Courriel:</strong> {{ $user->email }}</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-outline-success">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger mt-4">There are no users to display!</div>
        @endforelse
    </div>

@endsection
