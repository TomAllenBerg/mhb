<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_history extends Model
{
    use HasFactory;
    protected $table = "medical_historys";
    public $timestamps = true;

    protected $fillable = [ 
        'name',
        'DOB',
        'bloodtype',
        'allergies',
        'conditions',
        'surgeries'
    ];
}
