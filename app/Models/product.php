<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable =[

        'product_no',
        'product_name',
        'batch',
        'price',
        'date',
        'bar_code',
        'print'

    ];
}
