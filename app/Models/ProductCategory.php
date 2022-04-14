<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $table = 'product_categories';
    protected $guarded = ['id'];
    protected $fillable = [
      'name',
  ];


  public function products(){
    return $this->hasMany(Product::class,'categories_id', 'id');
  }

}