<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistoryDetail extends Model
{
    protected $perPage = 20;

    protected $fillable = ['histoy_id', 'product_id', 'quantity', 'price', 'amount'];

    public function history(): BelongsTo
    {
        return $this->belongsTo(History::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }    

}
