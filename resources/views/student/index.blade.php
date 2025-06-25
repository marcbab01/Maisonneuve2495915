@extends('layouts.app')
@section('title', trans('lang.student_list'))

@section('content')

    <h1 class="mt-5 mb-4 text-success">@lang('lang.student_list')</h1>
    @if(Auth::check())
    <p>ID de l'utilisateur connecté : {{ Auth::id() }}</p>
    @endif
    <div class="row">
        @forelse ($students as $student)
            <div class="col-md-6">
                <div class="card mb-4 shadow border-success">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">{{ $student->name }}</h5>
                    </div>
                    <div class="card-body bg-success-subtle">
                        <ul class="list-unstyled mb-0">
                            <li><strong>@lang('lang.address'):</strong> {{ $student->address }}</li>
                            <li><strong>@lang('lang.phone'):</strong> {{ $student->phone }}</li>
                            <li><strong>@lang('lang.email'):</strong> {{ $student->email }}</li>
                            <li><strong>@lang('lang.dob'):</strong> {{ $student->birth }}</li>
                            <li><strong>@lang('lang.city'):</strong> {{ $student->city?->name }}</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('student.show', $student->id) }}" class="btn btn-sm btn-outline-success">
                                @lang('lang.view_btn')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger mt-4">There are no students to display!</div>
        @endforelse
    </div>

@endsection
