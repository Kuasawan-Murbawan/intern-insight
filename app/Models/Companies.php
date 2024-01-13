<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $primaryKey = 'companyID';

    protected $fillable = [
        'companyID',
        'name',
        'sector',
        'employees',
        'location',
        'website',
        'reviews',
        'logo'
    ];

    protected $casts = [
        'companyID' => 'string'
    ];
}
