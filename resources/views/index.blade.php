@extends('layouts.app')

@section('content')

<div>
    <main>
        <div class="header-section">
            <div>
                <span class="subtitle">Stock</span>
                <h1 class="title">Items</h1>
            </div>
            <span class="date">Wednesday, August 19</span>
        </div>
        <div class="toolbar-row">  
            <a href="{{ route('items.create') }}" class="btn btn-primary">Create an item</a>
        </div>
        <div class="card stock-card">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Minimum</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="">Zwart T-Shirt maat S</a></td>
                        <td>TS-BLK-S</td>
                        <td>4</td>
                        <td>10</td>
                        <td>Low on stock</td>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="">{{ $item->name }}</a></td>
                            <td>{{ $item->sku }}</td>
                            <td>{{ $item->stock_amount }}</td>
                            <td>{{ $item->minimum_stock }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>

@endsection