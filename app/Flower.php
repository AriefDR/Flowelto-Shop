<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = "flowers";
    protected $foreignKey = "category_id";
    protected $fillable = [
        "flower_name", "flower_description", "flower_price", 'stock', 'flower_img', 'slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
