<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Payment extends Model
{
    protected $table = "payments";
    
    protected $fillable = ['sites_id', 'bank', 'code', 'amount', 'currency', 'comments', 'verified'];
    
     public function site(){
        
        return $this->belongsTo('App\Site');        
    }
    
    
    public static function totalLastMonthVEF(){
        
        return Payment::monthly(1)->where('currency', '=', 'VEF')->sum('amount');
        
    }
    
    public static function totalLastMonthUSD(){
        
        return Payment::monthly(1)->where('currency', '=', 'USD')->sum('amount');
        
    }
    
    public static function totalLastMonthCLP(){
        
        return Payment::monthly(1)->where('currency', '=', 'CLP')->sum('amount');
        
    }
    
    
    public function scopeMonthly($query, $submonth){
         
        return $query->whereMonth('created_at', '=', Carbon::now()->subMonth($submonth)->format('m'));
    }
    
    
}
