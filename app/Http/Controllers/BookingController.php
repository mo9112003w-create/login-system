<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\Booking;

class BookingController extends Controller
{
    // صفحة الحجز
    public function create()
    {
        $plans = PricingPlan::all();  // جلب الأقسام
        return view('Apointment', compact('plans'));  // نفس اسم الملف
    }

    // حفظ الحجز
    public function store(Request $request)
    {
        $request->validate([
            'pricing_plan_id' => 'required|exists:pricing_plans,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Booking::create([
            'pricing_plan_id' => $request->pricing_plan_id,
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect()->back()->with('success', 'تم حجز موعدك بنجاح!');
    }
}
