<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable =[

        'batch_status', 'product_no', 'item_name', 'location_code', 'store', 'pack_size','count_no',
        'grn_batch_id', 'arn_id', 'container_no', 'container_status', 'brand_name', 
        'item_description', 'batch_no', 'uom', 'mfg_dt', 'exp_dt', 'no_of_cont', 
        'pack_size', 'rec_qty', 'manufacturer', 'supplier', 'grn_no', 'grn_date', 
        'format_no', 'printed_by',
        'bar_code',
        'print'

    ];
}
