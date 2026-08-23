@extends('layouts.standard')

@section('content')

<div class="login-container">
    <div class="login-box">
        <div class="logo">
            <div>StockPilot</div>
        </div>
        <div class="auth-card">
            <h1>Login</h1>
            <p class="auth-sub">Log in to manage inventory.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="stockpilot@email.com" required/>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="●●●●●●●●●●●●●●●" required/>
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
            </form>
            <div class="auth-footer">
                <p>Registration is disabled. This system has one administrator.</p>
            </div>
        </div>
    </div>
</div>

@endsection