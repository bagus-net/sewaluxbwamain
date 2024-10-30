<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    //
    use HasFactory, SoftDeletes;    
    protected $fillable = [
        'name',
        'trx_id',
        'proof',
        'phone_number',
        'address',
        'total_amount',
        'product_id',
        'store_id',
        'duration',
        'is_paid',
        'delivery_type',
        'started_at',
        'ended_at',

    ];

    protected $casts =[
        'started_at'=>'date',
        'ended_at'=> 'date',
    ];
}
