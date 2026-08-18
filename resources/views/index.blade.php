@extends('layouts.app')

@section('content')

<h1>Items</h1>

<a href="{{ route('items.create') }}">Create an item</a>

<ul>
@foreach ($items as $item)
    <li><a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a></li>
@endforeach
</ul>

@endsection