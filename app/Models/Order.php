<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_type', 'product_id', 'cantitate'];

    public function electrica(): BelongsTo
    {
        return $this->belongsTo(electrica::class, 'product_id');
    }

    public function instrumente(): BelongsTo
    {
        return $this->belongsTo(instrumente::class, 'product_id');
    }

    public function suruburi(): BelongsTo
    {
        return $this->belongsTo(suruburi::class, 'product_id');
    }

    public function santehnica(): BelongsTo
    {
        return $this->belongsTo(santehnica::class, 'product_id');
    }

    public function uzcasnic(): BelongsTo
    {
        return $this->belongsTo(uzcasnic::class, 'product_id');
    }
}
