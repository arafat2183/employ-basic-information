<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;

    protected $fillable=['name', 'email', 'address', 'mobile', 'dob', 'designation', 'salary'];
}
