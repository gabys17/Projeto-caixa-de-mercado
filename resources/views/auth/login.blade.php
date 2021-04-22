@extends('layouts.auth')

@section('title', 'Login')

@section('auth_child')
    @include('auth.includes.login')

    @include('auth.includes.register')    
@endsection