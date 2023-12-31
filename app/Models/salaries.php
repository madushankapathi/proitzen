<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaries extends Model
{
    use HasFactory;

    protected $table = 'salaries';

    protected $fillable = [
        'emp_no',
        'salary',
        'from_date',
        'to_date',
    ];
}
