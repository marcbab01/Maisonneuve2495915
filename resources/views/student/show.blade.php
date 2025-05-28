@extends('layouts.app')
@section('title', 'Student')
@section('content')
    <h1 class="mt-5 mb-4">Student</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
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
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection