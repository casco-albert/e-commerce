<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'discount_percentage',
        'start_date',
        'end_date',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isActive()
    {
        return $this->start_date <= now() && $this->end_date >= now();
    }
    public function getPriceAfterDiscount()
    {
        if ($this->product && $this->isActive()) {
            $discountAmount = ($this->product->regular_price * $this->discount_percentage) / 100;
            return $this->product->regular_price - $discountAmount;
        }
        return $this->product->regular_price;
    }
    public function scopeAvailable($query)
    {
        return $query->where('start_date', '<=', now())
                     ->where('end_date', '>=', now());
    }
}
