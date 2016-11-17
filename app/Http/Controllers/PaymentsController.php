<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

use App\Number;

class PaymentsController extends Controller
{
    public function onProcess(){
        
        $sites = Site::where('payment_month', 'on_process')->get();
       
        return view('payments.onProcess', ['sites' => $sites]);
        
    }
}
