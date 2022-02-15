<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tst extends Model
{
    use HasFactory;

    protected $table = "tst";
    
    protected $fillable = [
        "testname",
        "abrivation",
        "price",
        "charge_code",
        "dicription",
        
    ];
}
