<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subbidang extends Model
{
    protected $fillable = ['name', 'description'];

    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }

    public function categories():HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function stockLogs()
    {
        return $this->hasMany(StockLog::class);
    }
}
