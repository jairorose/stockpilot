@extends('layouts.app')

@section('content')

<div>
    <main>
        <div class="header-section">
            <div>
                <span class="subtitle">{{ $item->name }} / Edit</span>
                <h1 class="title">Edit item</h1>
            </div>
        </div>
        <div class="card item-form">
            <form method="POST" action="{{ route('items.update', $item->id) }}">
                @method('PUT')
                @csrf
                <div class="field">
                    <label for="email">Name</label>
                    <input type="text" name="item-name" value="{{ $item->name }}"/>
                </div>
                <div class="field">
                    <label for="email">SKU (optional)</label>
                    <input type="text" name="sku" value="{{ $item->sku }}"/>
                </div>
                <div class="field">
                    <label for="email">Current stock</label>
                    <input type="number" name="stock-amount" value="{{ $item->stock_amount }}"/>
                </div>
                <div class="field">
                    <label for="email">Minimum stock</label>
                    <input type="number" name="minimum-stock" value="{{ $item->minimum_stock }}"/>
                </div>
                <div class="btn-row">
                    <a href="" class="btn btn-outline-secondary">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </form>
            <div class="delete-section">
                <span class="note">This deletes the item indefinitely.</span>
                <form method="POST" action="{{ route('items.destroy', $item->id) }}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Delete item</button>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection