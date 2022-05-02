<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cat_name', 'cat_image_path','cat_description'

    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
