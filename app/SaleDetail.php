<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $table = "sale_details";
    
    protected $fillable = ['sites_id', 'item_name', 'item_price'];
    
     public function sale(){
        
        return $this->belongsTo('App\Sale');        
    }
    
    
}
