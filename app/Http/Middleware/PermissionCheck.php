<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\UserPermission;
use App\Models\Permission;
use Session;

class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user(); // get user object
        $geturlslug = \Request::segment(2);  // get url slug

        // if($geturlslug != 'leads'){
        //      Session::forget('lead-search');
        //      Session::forget('peritem');
        //      Session::forget('searchstatusids');
        //      Session::forget('searchcategoryids');
        //      Session::forget('searchassignto');
        //      Session::forget('startdate'); 
        //      Session::forget('endate');
        // }

        $getpermissionid = Permission::where('name',$geturlslug)->first();
        $getuserpermissions = UserPermission::where('user_id',$user->id)->pluck('permisssion_id')->ToArray();
        
        if(!empty($getuserpermissions)){
            if(!empty($getpermissionid->id)){
                if(in_array($getpermissionid->id, $getuserpermissions)){
                    return $next($request);
                }else{
                    return redirect('/forbidden-error');
                } 

            }else{
                return $next($request);        
            }
        }else{  
            return $next($request);    
        }
        
    }
}
