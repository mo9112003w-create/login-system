<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function store(Request $request)
    {
        $imagePath = $request->file('image')->store('operations', 'public');

        Operation::create([
            'name' => $request->name,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        return back()->with('success', 'تم إضافة العملية');
    }
}