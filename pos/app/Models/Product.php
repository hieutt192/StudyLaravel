<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'slug',
        'category_id',
        'quantity',
        'price',
        'description',
    ];

    public function category()
    {
        # code...
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        # code...
        return $this->belongsToMany(Image::class
                                    ,'product_image'
                                    ,'product_id'
                                    ,'image_id');
    }
}
