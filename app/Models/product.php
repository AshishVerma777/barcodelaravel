<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

   

   // protected $connection = 'mysql2';
 //   protected $table = 'products'; // Use the correct table name



    //protected $connection = 'mysql3';
    //protected $table = 'deviation_audit_trials';     // Specify the table name in the other database

    // protected $fillable =[

    //     'batch_status', 'product_no','item_code', 'item_name','uom_branch', 'location_code', 'store', 'pack_size','count_no',
    //     'grn_batch_id', 'arn_id', 'container_no', 'container_status', 'brand_name', 'unit','quantity_of_product','weightPerPackage','totalWeight',
    //     'item_description', 'batch_no', 'uom', 'mfg_dt', 'exp_dt', 'no_of_cont', 
    //     'pack_size', 'rec_qty', 'manufacturer', 'supplier', 'grn_no', 'grn_date', 
    //     'format_no', 'printed_by',
    //     'bar_code',
    //     'print'

    // ];

    // public function containers()
    // {
    //     return $this->hasMany(ProductContainer::class, 'product_id');
    // }


}
