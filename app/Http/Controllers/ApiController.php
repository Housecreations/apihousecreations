<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test(Request $request){
       
       if($request->token == '123456'){
           return response()->json($request);
       }else{
           return response("Don't have permission", 403);
       }
        
        
       /* return response()->json([
            'response1' => 'val1',
            'response2' => 'val2'
        ]);*/
        
    }
}
