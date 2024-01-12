<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $primaryKey = 'reviewID';

    protected $fillable = [
        'userID',
        'reviewID',
        'overallRating',
        'jobTitle',
        'allowance',
        'review',
        'tips',
        'companyID'
    ];
}
