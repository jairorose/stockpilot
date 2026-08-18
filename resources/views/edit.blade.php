@extends('layouts.app')

@section('content')

<h1>Edit item</h1>

<form method="POST" action="{{ route('items.update', $item->id) }}">
    @method('PUT')
    @csrf
    <input type="text" name="item-name" placeholder="Item name" value="{{ $item->name }}"/>
    <input type="text" name="sku" placeholder="SKU" value="{{ $item->sku }}"/>
    <input type="number" name="stock-amount" placeholder="Stock amount" value="{{ $item->stock_amount }}"/>
    <input type="number" name="minimum-stock" placeholder="Minimum stock" value="{{ $item->minimum_stock }}"/>
    <input type="submit" value="submit"/>
</form>

<form method="POST" action="{{ route('items.destroy', $item->id) }}">
    @method('DELETE')
    @csrf
    <input type="submit" value="Delete item"/>
</form>

@endsection