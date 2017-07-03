<?php

namespace App\Http\Controllers;

use App\juice;
use Illuminate\Http\Request;

class JuiceController extends Controller
{

    public function __construct() {
        $this->middleware('auth.admin')
            ->except(['index', 'show', ]);

        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Juice::all();
        return view('product3.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product3.form');
        return redirect()->route('products3.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Juice::create([
            'title' => $request->get('title'),
            'photo' => $request->get('photo'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'type' => $request->get('type'),
            ]);
        return redirect()->route('juice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function show(juice $juice)
    {
         $products = Juice::find($juice);
        return view('product3.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Juice::find($id);
        return view('product3.form', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Juice::find($id)->update($request->all());
        return redirect()->route('juice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\juice  $juice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Juice::find($id)->delete();
        return redirect()->route('juice.index');
    }
}
