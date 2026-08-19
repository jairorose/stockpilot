@extends('layouts.app')

@section('content')

<h1>Login</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf
    @error('email')
        <span>{{ $message }}</span>
    @enderror
    <label for="email">Email</label>
    <input id="email" type="email" name="email" required/>
    <label for="password">Password</label>
    <input id="password" type="password" name="password" required/>
    <button type="submit">Login</button>
</form>

@endsection