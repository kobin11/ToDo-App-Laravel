@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="col-md-8">
<div class="card">
    <div class="card-header">Register Form</div>
    <div class="card-body">

        <form action="{{ route('admin.register') }}" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
</br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </form>
    </div>
</div>
</div>
</div>
@stop