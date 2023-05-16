@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class='alert alert-danger'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('school.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name='name' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <input type="text" name='course' class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Class</label>
                                <input type="text" name='class' class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        {{ __('Registration Page') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
