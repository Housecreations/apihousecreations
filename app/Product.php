<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = "products";
    
    protected $fillable = ['store_id', 'sites_id', 'name', 'name_slug', 'price', 'price_now', 'discount', 'category', 'category_slug', 'image_url', 'description', 'stock'];
    
    public function site(){
        
        return $this->belongsTo('App\Site');        
    }
}
