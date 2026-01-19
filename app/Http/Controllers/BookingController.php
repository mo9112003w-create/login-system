<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        $plans = PricingPlan::all(); // جلب كل الأقسام
        return view('Apointment', compact('plans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'pricing_plan_id' => 'required|exists:pricing_plans,id',
        ]);

        Appointment::create($request->all());

        return redirect()->back()->with('success', 'تم حجز الموعد بنجاح!');
    }
}
