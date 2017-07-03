<?php

namespace App\Http\Controllers;

use App\tech;
use Illuminate\Http\Request;

class TechController extends Controller
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
        $products = Tech::all();
        return view('product2.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product2.form');
        return redirect()->route('products2.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Tech::create([
            'title' => $request->get('title'),
            'photo' => $request->get('photo'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'type' => $request->get('type'),
            ]);
        return redirect()->route('tech.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function show(tech $tech)
    {
        $products = Tech::find($tech);
        return view('product2.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Tech::find($id);
        return view('product2.form', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tech::find($id)->update($request->all());
        return redirect()->route('tech.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tech  $tech
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tech::find($id)->delete();
        return redirect()->route('tech.index');
    }
}
