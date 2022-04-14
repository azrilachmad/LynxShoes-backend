<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductCategory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'products';
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'products';
    protected $fillable = [
      'name',
      'description',
      'price',
      'categories_id',
      'price',
  ];

  public function galleries(){
    return $this->hasMany(ProductGallery::class, 'products_id', 'id');
  }


  public function category(){
    return $this->belongsTo(ProductCategory::class, 'categories_id', 'id');
  }
}
