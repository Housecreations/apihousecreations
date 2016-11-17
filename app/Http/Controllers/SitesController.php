<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Site;

use App\Http\Requests\SiteRequest;

use Carbon\Carbon;

use Laracasts\Flash\Flash;

class SitesController extends Controller
{
    
    
    
    public function index(Request $request){
        
          $sites = Site::search($request->name)->orderBy('id', 'DESC')->paginate(10);
          
        return view('sites.index', ['sites' => $sites]);
        
    }
    
    public function store(SiteRequest $request){
        
        $site = new Site($request->all());
        $site->status = 'active';
        $site->country = strtolower($site->country);
        $site->start_date = Carbon::now();
        $site->finish_date = Carbon::now()->addYears(1);
        $site->token = '';
        $site->company_registration_code = 'none';
        $site->save();
        $site->token = md5("$site->id $site->created_at");
        $site->save();
        
        Flash::success('La tienda '.$site->name.' ha sido registrada');
        
        return back();
        
    }
    
    public function show($id){
        
        $site = Site::find($id);
        
        return view('sites.show', ['site' => $site]);
        
    }
    
    public function apiSecret(Request $request, $id){
        
        if($request->ajax()){
            
            $site = Site::find($id);
            
            return response()->json([
               'api_secret' => $site->token 
            ]);
            
        }else{
            return back();
        }
        
    }
}
