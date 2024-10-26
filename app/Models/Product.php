<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'imagen',
        'regular_price',
        'last_to_price',
        'stock',
        'category_id',
        'brand_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand(){
        return $this->belongsTo(brand::class);
    }
    public function promotions()
    {
        return $this->hasOne(Promotions::class)
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now());
    }

    public function getPriceAfterDiscount()
    {
        if ($this->promotions) {
            $discountAmount = ($this->regular_price * $this->promotions->discount_percentage) / 100;
            return $this->regular_price - $discountAmount;
        }
        return $this->regular_price;
    }
    
    

    protected $table = 'products';
}
