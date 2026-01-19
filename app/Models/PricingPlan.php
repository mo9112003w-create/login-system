<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'price',
        'duration',
        'feature1',
        'feature2',
        'feature3',
        'feature4',
    ];
}
