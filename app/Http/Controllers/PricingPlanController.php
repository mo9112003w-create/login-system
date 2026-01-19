<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::all();
        return view('pricing', compact('plans'));
    }


    public function doctor()
    {
        $doctors = Doctor::all(); // جلب كل الأطباء
        return view('team', compact('doctors'));
    }
}
