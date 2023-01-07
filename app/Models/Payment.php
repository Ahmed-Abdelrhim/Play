<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $table = 'payments';

    protected $guarded = [];

    protected $hidden = [];

    protected $casts = [
        'created_date' => 'date:Y-m-d H:00',

    ];
}
