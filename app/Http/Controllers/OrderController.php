<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function index(): View {
        $orders=Order::all();
        return view('order.index', compact('orders'));
    }

    public function create(): View {
        return view('order.create');
    }

    public function store(OrderRequest $request): RedirectResponse {
        
        Order::create($request -> all());
        return redirect()->route('order.index');
    }

    public function edit(Order $order): View {

        return view('order.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order): RedirectResponse {
        
        $order -> update($request ->all());
        return redirect() ->route('order.index');
    }

    public function destroy(Order $order): RedirectResponse {
        
        $order -> delete();
        return redirect() ->route('order.index');

    }

}
