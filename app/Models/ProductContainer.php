<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductContainer extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_id', 'number', 'status'
    ];

    public function product()//container
    {
        return $this->belongsTo(product::class, 'id');
    }

}
