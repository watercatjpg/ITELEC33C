<?php

namespace App\Http\Controllers;

use App\Models\PreOrder;
use Illuminate\Http\Request;

class PreOrderController extends Controller
{


    public function index()
    {
        $preOrders = PreOrder::paginate(5); // paginate the pre-orders
        return view('preorders', ['preOrders'=>$preOrders]);
    }

    public function create()
    {
        return view('preorder');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create a new pre-order record
        $preOrder = new PreOrder();
        $preOrder->full_name = $request->input('name');
        $preOrder->email = $request->input('email');
        $preOrder->quantity = $request->input('quantity');
        $preOrder->save();

        return redirect()->back()->with('success', 'Successfully created pre-order!');
    }
}