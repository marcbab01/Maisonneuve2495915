@extends('layouts.app')
@section('title', 'Student List')
@section('content')
    <h1 class="mt-5 mb-4">Liste des Étudiants</h1>
    <div class="row">
        @forelse ($students as $student)
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">{{ $student->name }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                        <li><strong>Adresse:</strong> {{ $student->address }}</li>
                        <li><strong>Téléphone:</strong> {{ $student->phone }}</li>
                        <li><strong>Email:</strong> {{ $student->email }}</li>
                        <li><strong>DOB:</strong> {{ $student->birth }}</li>
                        <li><strong>Ville:</strong> {{ $student->city_id }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger">There are no students to display!</div>
        @endforelse
    </div>
@endsection