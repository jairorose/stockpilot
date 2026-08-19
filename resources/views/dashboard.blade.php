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
                <b class="stat-value">128</b>
            </div>
            <div class="card stat-card">
                <span class="stat-label">Low stock</span>
                <b class="stat-value">4</b>
            </div>
            <div class="card stat-card">
                <span class="stat-label">Lorem ispum</span>
                <b class="stat-value">17</b>
            </div>
        </div>
        <div class="card low-stock-card">
            <div class="data-table-header">
                <h2>Low stock</h2>
                <a href="">All items</a>
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
                    <tr>
                        <td><a href="">Zwart T-Shirt maat S</a></td>
                        <td>TS-BLK-S</td>
                        <td>4</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-row">
            <a href="" class="btn btn-outline-secondary">View items</a>
            <a href="" class="btn btn-primary">New item</a>
        </div>
    </main>
</div>

@endsection