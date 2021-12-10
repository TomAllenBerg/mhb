<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;
    protected $table = "surgeries";
    public $timestamps = true;

    protected $fillable = [ 
        'surgeryName',
        'surgeon',
        'surgeryDate',
        'surgeryDesc',
        'UUID'
    ];
}
