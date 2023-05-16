@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Course</th>
                            <th scope="col">Class</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                    {{ __('Index Page') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
