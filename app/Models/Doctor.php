<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = "doctors";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'specialty',
        'location'
    ];

}
