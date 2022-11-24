<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchAddress;
use Validator;
use URL;
use Crypt;
use Helper;

class SettingController extends Controller
{
    public function getbranchAddress(Request $request)
    {
        return view('setting.index');
    }

    // add branch address
    public function updateBranchadd(Request $request)
    {
        $this->prefix = request()->route()->getPrefix();
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $rules = array(
                'name' => 'required',
            );
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                $errors                  = $validator->errors();
                $response['success']     = false;
                $response['formErrors']  = true;
                $response['errors']      = $errors;                
                return response()->json($response);
            }
            if(!empty($request->name)){
                $settingsave['name']   = $request->name;
            }
            if(!empty($request->gst_number)){
                $settingsave['gst_number']   = $request->gst_number;
            }
            if(!empty($request->phone)){
                $settingsave['phone']   = $request->phone;
            }
            if(!empty($request->address)){
                $settingsave['address']   = $request->address;
            }
            if(!empty($request->state)){
                $settingsave['state']   = $request->state;
            }
            if(!empty($request->district)){
                $settingsave['district']   = $request->district;
            }
            if(!empty($request->city)){
                $settingsave['city']   = $request->city;
            }
            if(!empty($request->postal_code)){
                $settingsave['postal_code']   = $request->postal_code;
            }
            if(!empty($request->email)){
                $settingsave['email']   = $request->email;
            }
            $settingsave['status']      = "1";

            $savesetting = BranchAddress::updateOrCreate(['meta_key'=>'addressdata_key'],$settingsave);
            if($savesetting){

                $response['success'] = true;
                $response['success_message'] = "Branch address value updated successfully.";
                $response['error'] = false;
                $response['page'] = 'settings-branch-address';
                  
            }else{
                $response['success'] = false;
                $response['error_message'] = "Can not updated branch address value please try again";
                $response['error'] = true;
            }
            return response()->json($response);

        }
        else
        {
            $branchaddvalue = BranchAddress::where(['meta_key'=>'addressdata_key'])->first();
            return view('settings.branch-address',['branchaddvalue'=>$branchaddvalue,'prefix'=>$this->prefix]);
        }
    }
}
