<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'color',
        'description',
        'size',
        'quantity',
        'availability',
        'manufacturer',
        'category',
        'model_number',
        'barcode',
    ];
}
