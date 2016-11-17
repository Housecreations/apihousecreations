<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sale;
use App\Site;
use App\Payment;

use Carbon\Carbon;

class AdminsController extends Controller
{
    public function index(){
        
        $totalMonthVEF = Sale::totalMonthVEF();
        $totalMonthUSD = Sale::totalMonthUSD();
        $totalMonthCLP = Sale::totalMonthCLP();
        $totalLastMonthVEF = Sale::totalLastMonthVEF();
        $totalLastMonthUSD = Sale::totalLastMonthUSD();
        $totalLastMonthCLP = Sale::totalLastMonthCLP();
        $paymentsLastMonthVEF = Payment::totalLastMonthVEF();
        $paymentsLastMonthUSD = Payment::totalLastMonthUSD();
        $paymentsLastMonthCLP = Payment::totalLastMonthCLP();
        $paymentsOnProcessCount = Site::paymentsOnProcessCount();
        $sitesCount = Site::totalSites();
        $totalPaySites = Site::totalPaySites();
        
        
        return view('home', ['totalMonthVEF' => $totalMonthVEF, 'totalMonthUSD' => $totalMonthUSD, 'totalMonthCLP' => $totalMonthCLP, 'totalLastMonthVEF' => $totalLastMonthVEF, 'totalLastMonthUSD' => $totalLastMonthUSD, 'totalLastMonthCLP' => $totalLastMonthCLP, 'paymentsLastMonthVEF' => $paymentsLastMonthVEF, 'paymentsLastMonthUSD' => $paymentsLastMonthUSD, 'paymentsLastMonthCLP' => $paymentsLastMonthCLP, 'sitesCount' => $sitesCount, 'totalPaySites' => $totalPaySites, 'paymentsOnProcessCount' => $paymentsOnProcessCount]);
        
    }
}
