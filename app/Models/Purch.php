<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purch extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'cost',
        'status',
    ];
}