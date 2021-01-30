<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{
    use HasFactory;

    protected $fillable = [
        'appName',
        'description',
        'appMonthlyPrice',
        'appYearlyPrice',
        'packMonthlyPrice',
        'packYearlyPrice'
    ];
}
