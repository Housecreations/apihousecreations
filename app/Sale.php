<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Sale extends Model
{
    
     protected $table = "sales";
    
    protected $fillable = ['sites_id', 'payment_code', 'currency', 'total'];
    
    
    public static function totalMonthVEF(){
        
        return Sale::monthly(0)->where('currency', '=', 'VEF')->sum('total');
        
    }
    
    public static function totalMonthUSD(){
        
        return Sale::monthly(0)->where('currency', '=', 'USD')->sum('total');
        
    }
    
    public static function totalMonthCLP(){
        
        return Sale::monthly(0)->where('currency', '=', 'CLP')->sum('total');
        
    }
    
    public static function totalLastMonthVEF(){
        
        return Sale::monthly(1)->where('currency', '=', 'VEF')->sum('total');
        
    }
    
    public static function totalLastMonthUSD(){
        
        return Sale::monthly(1)->where('currency', '=', 'USD')->sum('total');
        
    }
    
    public static function totalLastMonthCLP(){
        
        return Sale::monthly(1)->where('currency', '=', 'CLP')->sum('total');
        
    }
    
    
    public function scopeMonthly($query, $submonth){
         
        return $query->whereMonth('created_at', '=', Carbon::now()->subMonth($submonth)->format('m'));
    }
    
    
     public function site(){
        
        return $this->belongsTo('App\Site');        
    }
    
    public function saleDetails(){
        
        return $this->hasMany('App\SaleDetail');        
    }
}
