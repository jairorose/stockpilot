<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mutation;
use App\Models\Item;
use App\Services\StockService;

class MutationController extends Controller
{
    public function __construct(private StockService $stockService) {}

    public function store(Request $request) 
    {
        $item = Item::findOrFail($request->input('item-id'));

        //dd($request->all());

        // $mutation = Mutation::create([
        //     'item_id' => $itemId,
        //     'amount' => $request->input('amount'),
        //     'type' => $request->input('type'),
        //     'note' => $request->input('note')
        // ]);

        $this->stockService->ProcessMutation(
            item: $item,
            amount: $request->input('amount'),
            type: $request->input('type'),
            note: $request->input('note')
        );

        return redirect()->route('items.show', $item->id);
    }
}
