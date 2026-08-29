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
        <div class="row item-mutation">
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
            <div>
                <div class="card">
                    <div class="card-header">
                        <h2>New mutation</h2>
                    </div>
                    <form method="POST" action="{{ route('mutation.store') }}">
                        @csrf
                        <input type="hidden" name="item-id" value={{ $item->id }} />
                        <div class="field">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" placeholder="-10"/>
                        </div>
                        <div class="field">
                            <label for="type">Type</label>
                            <select id="type" name="type">
                                <option value="purchase">Purchase</option>
                                <option value="sale">Sale</option>
                                <option value="usage">Usage</option>
                                <option value="correction">Correction</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="note">Note <span class="greyed-out">(Optional)</span></label>
                            <input type="text" name="note" placeholder="E.g. order #123"/>
                        </div>
                        <div class="btn-row">
                            <button class="btn btn-primary" type="submit">Add mutation</button>
                        </div>
                    </from>
                </div>
                <div class="card">
                    <h2>Mutation history</h2>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection