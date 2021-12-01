<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;
    protected $table = "prescriptions";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'dosage_amt',
        'dosage_unit',
        'route',
        'instructions',
        'side_effects'
    ];
 
}
