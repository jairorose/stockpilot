@extends('layouts.app')

@section('content')

<div>
    <main>
        <div class="header-section">
            <div>
                <span class="subtitle">Items / New</span>
                <h1 class="title">New item</h1>
            </div>
            <span class="date">Wednesday, August 19</span>
        </div>
        <div class="card item-form">
            <form method="POST" action="{{ route('items.store') }}">
                @csrf
                <div class="field">
                    <label for="email">Name</label>
                    <input type="text" name="item-name" placeholder="E.g. Black T-Shirt size M"/>
                </div>
                <div class="field">
                    <label for="email">SKU (optional)</label>
                    <input type="text" name="sku" placeholder="ABC-1234"/>
                </div>
                <div class="field">
                    <label for="email">Stock</label>
                    <input type="number" name="stock-amount" placeholder="50"/>
                </div>
                <div class="field">
                    <label for="email">Minimum stock</label>
                    <input type="number" name="minimum-stock" placeholder="10"/>
                    <span class="note">The threshold at which this item appears as “low stock” on the dashboard.</span>
                </div>
                <div class="btn-row">
                    <a href="" class="btn btn-outline-secondary">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save item</button>
                </div>
            </form>
        </div>
    </main>
</div>

@endsection