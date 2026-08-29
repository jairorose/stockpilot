<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'sku', 'stock_amount', 'minimum_stock'];

    public function mutations() 
    {
        return $this->hasMany(Mutation::class);
    }
}
