<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stocklog extends Model
{
    protected $table = 'tbl_stocklogs';
    protected $fillable = [
        'item_id',
        'subbidang_id',
        'user_id',
        'type',
        'quantity',
        'note'
    ];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function item():BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

    public function subbidang():BelongsTo
    {
        return $this->belongsTo(Subbidang::class);
    }
}
