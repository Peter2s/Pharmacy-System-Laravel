<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMedicineQuantity extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'medicine_id',
        'quantity',
        'price',
        'cost'
    ];
}
