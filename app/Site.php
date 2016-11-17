<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
        protected $table = "sites";
    
    protected $fillable = ['name', 'token', 'url', 'country', 'email', 'phone', 'start_date', 'finish_date', 'status', 'company_registration_code', 'payment_month'];
    
    public function scopeSearch($query, $name){
    
    return $query->where('name', 'LIKE', "%$name%");
    
}
    
    public static function paymentsOnProcessCount(){
        
        return Site::where('payment_month', 'on_process')->count();
        
    }
    
    public static function totalSites(){
        
        return Site::all()->count();
        
    }
    
    public static function totalPaySites(){
        
        return Site::where('payment_month', 'yes')->count();
        
    }
    
    public function sales(){
        
        return $this->hasMany('App\Sale');        
    }
    
    public function products(){
        
        return $this->hasMany('App\Product');        
    }
    
     public function payments(){
        
        return $this->hasMany('App\Payment');        
    }
    
    public function unverifiedPayments(){
      
        return $this->hasMany('App\Payment');
    }
    
    
    public function numbers(){
      
        return $this->hasMany('App\Number');
    }
    
    
}
