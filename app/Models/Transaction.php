<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $table = 'transactions';

    protected $fillable = ['invoice_id','customer_id','product_id'];
    protected $hidden = [];

    protected $casts = [];
}
