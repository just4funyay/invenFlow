<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    protected $table = 'tbl_item';
    protected $fillable = ['name', 'category_id', 'unit'];
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function stockLogs():HasMany
    {
        return $this->hasMany(StockLog::class);
    }
}
