<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'amount',
        'month',
        'status',
    ];

    // ✅ العلاقات
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
