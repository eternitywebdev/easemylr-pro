<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'meta_key', 'name','gst_number','phone','address','state','district','city','postal_code','email','status','created_at', 'updated_at'
    ];
}
