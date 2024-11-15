<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class BrandCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'brand_id',
    ];  

   
    public function brand(): BelongsTo 
    {
        return $this->BelongsTo(Brand::class, 'brand_id');
    }

    public function category(): BelongsTo 
    {
        return $this->BelongsTo(Category::class, 'category_id');
    }  
}
