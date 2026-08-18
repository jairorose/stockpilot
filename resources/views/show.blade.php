@extends('layouts.app')

@section('content')

<h1>{{ $item->name }}</h1>

<p>Id: {{ $item->id }}</p>
<p>SKU: {{ $item->sku }}</p>
<p>Stock amount: {{ $item->stock_amount }}</p>
<p>Minimum stock: {{ $item->minimum_stock }}</p>

<a href={{ route('items.edit', $item->id) }}>Edit item</a>
<a href={{ route('items.index') }}>Back to items</a>

@endsection