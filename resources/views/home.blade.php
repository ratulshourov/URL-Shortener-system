@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
                    @endauth


                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a href="{{ route('add-new-url') }}" class="btn btn-primary">ADD URL</a>
                    <a href="{{ route('all-url') }}" class="btn btn-primary"> URL List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection