<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productgrid extends Model
{
    use HasFactory;
    
    protected $fillable =[
            
        'product_id',        
        'data',
        'identifier'

    ];

    protected  $casts=[

         'data'=>'array',
        //  'identifier'=>'array'

    ];
}
