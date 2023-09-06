<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders';

    protected $fillable = [

        'id_user',
        'date_order', 
        'id_status',
        'cost_total_order',

    ];

}
