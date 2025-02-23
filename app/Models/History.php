<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class History extends Model
{
    //
    protected $perPage = 20;

    protected $fillable = ['user_id', 'shipping_receiver_name', 'shipping_address', 'payment_token', 'payment_id', 'payment_redirect_url', 'amount'];

    public function historyDetails(): HasMany
    {
        return $this->hasMany(HistoryDetail::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
