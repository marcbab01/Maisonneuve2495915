@extends('layouts.app')
@section('title', trans('lang.add_student'))

@section('content')

    <h1 class="mt-5 mb-4 text-success text-center">@lang('lang.add_student')</h1>

    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow border-success">
                <div class="card-header bg-success text-white text-center">
                    <h5 class="mb-0">@lang('lang.add_student')</h5>
                </div>
                <div class="card-body bg-success-subtle">
                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label text-success">@lang('lang.student_name')</label>
                            <input type="text" class="form-control border-success" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label text-success">@lang('lang.address')</label>
                            <input type="text" class="form-control border-success" id="address" name="address" value="{{ old('address') }}">
                            @error('address')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label text-success">@lang('lang.phone')</label>
                            <input type="text" class="form-control border-success" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-success">@lang('lang.email')</label>
                            <input type="email" class="form-control border-success" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="birth" class="form-label text-success">@lang('lang.dob')</label>
                            <input type="date" class="form-control border-success" id="birth" name="birth" value="{{ old('birth') }}">
                            @error('birth')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="city" class="form-label text-success">@lang('lang.city')</label>
                            <input type="text" class="form-control border-success" id="city" name="city" value="{{ old('city') }}">
                            @error('city')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">@lang('lang.save')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
