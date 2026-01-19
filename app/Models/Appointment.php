<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'pricing_plan_id'];

    // العلاقة مع PricingPlan
    public function pricingPlan()
    {
        return $this->belongsTo(PricingPlan::class);
    }
}
