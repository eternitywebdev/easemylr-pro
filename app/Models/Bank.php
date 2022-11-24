<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'bank_name', 'branch_name', 'ifsc', 'account_number', 'account_holdername', 'status', 'created_at', 'updated_at','broker_id',
    ];
}
