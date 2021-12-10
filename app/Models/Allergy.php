<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;
    protected $table = "allergies";
    public $timestamps = true;

    protected $fillable = [ 
        'allergies',
        'UUID',
    ];
}
