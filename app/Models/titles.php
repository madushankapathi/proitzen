<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titles extends Model
{
    use HasFactory;

    protected $table = 'titles';

    protected $fillable = [
        'emp_no',
        'title',
        'from_date',
        'to_date'
    ];
}
