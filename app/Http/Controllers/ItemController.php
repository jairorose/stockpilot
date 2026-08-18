<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();

        return view('index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate before storing
        // $validate = $request->validate([
        //     'item-name' => ['required', 'string', 'max:255'],
        //     'sku' => ''
        // ]);

        // Store data in database
        $item = Item::create([
            'name' => $request->input('item-name'),
            'sku' => $request->input('sku'),
            'stock-amount' => $request->input('stock-amount'),
            'minimum-stock' => $request->input('minimum-stock')
        ]);

        // Show newly made item to user
        return redirect()->route('items.show', $item);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);

        return view('show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);

        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);

        $item->name = $request->input('item-name');
        $item->sku = $request->input('sku');
        $item->stock_amount = $request->input('stock-amount');
        $item->minimum_stock = $request->input('minimum-stock');

        $item->save();

        return redirect()->route('items.show', $item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::destroy($id);

        return redirect()->route('items.index');
    }
}
