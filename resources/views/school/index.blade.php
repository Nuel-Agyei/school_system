@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        @if (count($school) > 0)
                            <table class="table">
                                <thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tbody>

                                </thead>
                                <tbody>
                                    @foreach ($school as $school)
                                        <tr>
                                            <td> {{ $school->Name }} </td>
                                            <td> {{ $school->course }} </td>
                                            <td> {{ $school->Class }} </td>
                                            <td>
                                                <a class="btn m-1 btn-sm btn-outline-primary" href="">Edit</a>
                                                <form method="post" action="{{ route('school.delete') }}" class="inner">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="school_id" value="{{$school->id}}">
                                                    <input type="submit" name="" class="btn btn-dark btn-sm" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        @else
                            <h2>No children registered</h2>
                            <a class="btn btn-sm btn-outline-primary" href="{{route('school.create')}}">Register Student</a><br>
                        @endif
                        {{ __('Index Page') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
