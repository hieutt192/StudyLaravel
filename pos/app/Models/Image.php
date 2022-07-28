<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'height',
        'width',
        
    ];

    public function categories()
    {
        # code...
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        # code...
        return $this->hasMany(Product::class);
    }
}
