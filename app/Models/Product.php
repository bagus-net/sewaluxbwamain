<?php

namespace App\Models;
use App\Casts\MoneyCast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    //
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'category_id',
        'brand_id',
        'price',
    ];  

    protected $casts =[
        'price'=> MoneyCast::class,
        
    ];

    public function category(): BelongsTo 
    {
        return $this->BelongsTo(Category::class);
    }  
    public function brand(): BelongsTo 
    {
        return $this->BelongsTo(Brand::class);
    }
    public function photos(): HasMany 
    {
        return $this->HasMany(ProductPhoto::class);
    }  

    
}
