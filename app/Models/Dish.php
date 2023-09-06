<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name_dish', 'category_id','description_short', 'description_detail', 'photo', 'price', 'allergens'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }


}
