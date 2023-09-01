<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dishes extends Model
{
    use HasFactory;
    protected $fillable = ['name_dish', 'description_short', 'description_detail', 'photo', 'price', 'allergens'];
}
