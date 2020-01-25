@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{route('signup')}}" method="POST">
                @csrf
                <div class="form-group {{$errors->has('email') ? 'text-danger' : ''}}">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group {{$errors->has('first_name') ? 'text-danger' : ''}}">
                    <label for="first_name">Your first name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{old('first_name')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'text-danger' : ''}}">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{route('signin')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Your E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group {{$errors->has('password') ? 'text-danger' : ''}}">
                    <label for="password">Your password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection