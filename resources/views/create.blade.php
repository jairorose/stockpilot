@extends('layouts.app')

@section('content')

<h1>Create item</h1>

<form method="POST" action="{{ route('items.store') }}">
    @csrf
    <input type="text" name="item-name" placeholder="Item name"/>
    <input type="text" name="sku" placeholder="SKU"/>
    <input type="number" name="stock-amount" placeholder="Stock amount"/>
    <input type="number" name="minimum-stock" placeholder="Minimum stock"/>
    <input type="submit" value="submit"/>
</form>

@endsection