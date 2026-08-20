@extends('layouts.app')

@section('content')

<div>
    <main>
        <div class="header-section">
            <div>
                <span class="subtitle"><a href="{{ route('items.index') }}">Items</a> / Detail</span>
                <h1 class="title">{{ $item->name }}</h1>
            </div>
            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-outline-secondary">Edit</a>
        </div>
        <div class="row">
            <div class="card show-item">
                <div class="stock-info">
                    <b class="value">{{ $item->stock_amount }}</b>
                    <span class="label">In stock</span>
                </div>
                <ul class="info-list">
                    <li>
                        <span>SKU</span>
                        <span>{{ $item->sku }}</span>
                    </li>
                    <li>
                        <span>Minimum stock</span>
                        <span>{{ $item->minimum_stock }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>

@endsection