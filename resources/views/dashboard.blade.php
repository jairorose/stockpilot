@extends('layouts.app')

@section('content')

<div>
    <main>
        <div class="header-section">
            <div>
                <span class="subtitle">Overview</span>
                <h1 class="title">Dashboard</h1>
            </div>
            <span class="date">Wednesday, August 19</span>
        </div>
        <div class="stat-row">
            <div class="card stat-card">
                <span class="stat-label">Total items</span>
                <b class="stat-value">{{ $itemCount }}</b>
            </div>
            <div class="card stat-card">
                <span class="stat-label">Low stock</span>
                <b class="stat-value">{{ $lowStockCount }}</b>
            </div>
        </div>
        <div class="card stock-card">
            <div class="data-table-header">
                <h2>Low stock</h2>
                <a href="{{ route('items.index') }}">All items</a>
            </div>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Minimum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowStockItems as $item)
                        <tr>
                            <td><a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></td>
                            <td>{{ $item->sku }}</td>
                            <td>{{ $item->stock_amount }}</td>
                            <td>{{ $item->minimum_stock }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="btn-row">
            <a href="{{ route('items.index') }}" class="btn btn-outline-secondary">View items</a>
            <a href="{{ route('items.create') }}" class="btn btn-primary">New item</a>
        </div>
    </main>
</div>

@endsection