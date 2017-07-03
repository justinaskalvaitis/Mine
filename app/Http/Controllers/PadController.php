<?php

namespace App\Http\Controllers;

use App\Pad;
use Illuminate\Http\Request;

class PadController extends Controller
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
        $products = Pad::all();
        return view('product4.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product4.form');
        return redirect()->route('products4.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pad::create([
            'title' => $request->get('title'),
            'photo' => $request->get('photo'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'type' => $request->get('type'),
            ]);
        return redirect()->route('pad.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pad  $pad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Pad::find($id);
        return view('product4.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pad  $pad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Pad::find($id);
        return view('product4.form', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pad  $pad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pad::find($id)->update($request->all());
        return redirect()->route('bricketts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pad  $pad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pad::find($id)->delete();
        return redirect()->route('bricketts.index');
    }
}
