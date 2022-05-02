<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Category;
class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description','image', 'price','status', 'category_id'

    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
