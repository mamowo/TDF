<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tests extends Model
{
    use HasFactory;
    protected $fillable = [
        'testname',
        'abrivation',
        'price',
        'charge_code',
        'dicription',
        
    ];
}
