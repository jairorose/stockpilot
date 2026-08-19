@extends('layouts.app')

@section('content')

<div class="hero-container">
    <div class="hero-box">
        <div>
            <div>StockPilot</div>
        </div>

        <h1>Keep track of your inventory, no matter what you sell</h1>
        <p>All in one system, without having to make adjustments for each product type.<p>

        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    </div>
</div>

@endsection