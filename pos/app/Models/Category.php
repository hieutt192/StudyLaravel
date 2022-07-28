<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'path',
        'image_id',
        'description',
    ];
    /**
     * 
     * 
     */
    public function products()
    {
        # code...
        return $this->hasMany(Product::class);
    }

    public function image()
    {
        # code...
        return $this->belongsTo(Image::class);
    }
     
    
}
