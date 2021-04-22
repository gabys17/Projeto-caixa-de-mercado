@extends('layouts.app')

@section('body_class', 'login')

@section('page_child')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        @yield('auth_child')
    </div>
</div>
@endsection