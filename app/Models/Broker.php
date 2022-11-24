<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_id', 'name', 'email', 'phone', 'gst_number', 'pan_number', 'broker_type', 'is_lane_approved', 'address', 'pan_card', 'cancel_cheque', 'status','created_at','updated_at'        
    ];

    public function BankDetail()
    {
        return $this->hasOne('App\Models\Bank','broker_id','id');
    }

    public function GetBranch(){
        return $this->hasOne('App\Models\Branch','id','branch_id');
    }
}
