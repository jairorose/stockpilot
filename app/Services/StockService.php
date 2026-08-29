<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Item;

class StockService
{
    public function ProcessMutation(Item $item, int $amount, string $type, string $note)
    {
        DB::transaction(function () use ($item, $amount, $type, $note) {
            $mutation = $item->mutations()->create([
                'amount' => $amount,
                'type' => $type,
                'note' => $note
            ]);

            $item->increment('stock_amount', $amount);

            return $mutation;
        });
    }
}