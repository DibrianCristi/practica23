<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class santehnica extends Model
{
    use HasFactory;
    protected $fillable = ['denumire', 'descriere', 'made_in', 'cantitate', 'pret'];
    public $timestamps = false;

    public function shoppingCartItems(): HasMany {
        return $this->hasMany(ShoppingCartItem::class, 'product_id')->where('product_type', 'santehnica');
    }
}
