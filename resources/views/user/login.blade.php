@extends('layouts.layout')

@section('content')
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card" style="width: 350px;">
            <div class="card-header bg-warning text-center">
                <strong>Login</strong>
            </div>
            <div class="card-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form  action="{{ route('check') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="email" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    </br>
                    <div class="form-group d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
<style type="text/css">
    body {
        background-color: #F0F0F0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .button {
        display: flex;
        justify-content: right;
    }
    .card {
        width: 100%;
        max-width: 350px;
        border-radius: 8px;
        overflow: hidden;
    }
</style>
@endpush