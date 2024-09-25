<?php

namespace App\Http\Controllers;

use App\Models\PreOrder;
use Illuminate\Http\Request;

class PreOrderController extends Controller
{
    // Store pre-order
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create a new pre-order record
        PreOrder::create([
            'full_name' => $request->input('name'),
            'email' => $request->input('email'),
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->back()->with('success', 'Successfully created pre-order!');
    }

    // Display all pre-orders (for admin view)
    public function index()
    {
        $preOrders = PreOrder::all();
        return view('preoder', compact('preOrders')); // Correcting the view path to match the file
    }
}
