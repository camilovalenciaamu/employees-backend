<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
     use HasFactory;

    protected $fillable = [
        'name', 'username', 'date_of_birth', 'status', 'hiring_date', 'country', 'area', 'current_position', 'commission',
    ];
}
