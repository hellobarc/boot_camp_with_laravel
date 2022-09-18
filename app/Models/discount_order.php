<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount_order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'discount_email',
        'promo_code',
        'phone',
        'product_id',
        'transaction',
        'status',
    ];
}
