<?php

namespace App\Http\Controllers;

use App\Order;
use App\About;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function __construct() {
        $this->middleware('auth.admin')
            ->except(['index', 'index2', 'create2', 'show', 'store', 'create']);

        $this->middleware('auth')->except(['store', 'index2', 'create', 'create2',]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('Order.index', compact('orders'));
    }

     public function index2()
    {
        $orders = Order::all();
        return view('Order2.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Order.form');
        return redirect()->route('Orders.index');
    }

    public function create2()
    {
        return view('Order2.form');
        return redirect()->route('Orders2.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'comment' => $request->get('comment'),
            'address' => $request->get('address'),
            ]);
        return redirect()->route('About.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = Order::find($order);
        return view('Order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::find($id);
        return view('Order.form', compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Order::find($id)->update($request->all());
        return redirect()->route('Orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('Orders.index');
    }
}
