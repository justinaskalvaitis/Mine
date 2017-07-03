<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

     public function __construct() {
        $this->middleware('auth.admin')
            ->except(['index', 'index2','index3', 'index4', 'show', 'edit', 'edit2', 'edit3' ,'edit4', 'store', 'create2', 'create3']);

        $this->middleware('auth')->except(['index', 'index2','index3', 'index4', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('About.index', compact('abouts'));
    }

    public function index2()
    {
        $abouts = About::all();
        return view('About2.index', compact('abouts'));
    }

    public function index3()
    {
        $abouts = About::all();
        return view('About3.index', compact('abouts'));
    }

    public function index4()
    {
        $abouts = About::all();
        return view('About4.index', compact('abouts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('About.form');
        return redirect()->route('About.index');
    }

    public function create2()
    {
        return view('About.form');
        return redirect()->route('About2.index');
    }

    public function create3()
    {
        return view('About.form');
        return redirect()->route('About3.index');
    }

    public function create4()
    {
        return view('About.form');
        return redirect()->route('About4.index');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        About::create([
            'title' => $request->get('title'),
            'comment' => $request->get('comment'),
            ]);
        return redirect()->route('About.index');
    }

   

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('About.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = About::find($id);
        return view('About.form', compact('abouts'));
    }

    public function edit2($id)
    {
        $abouts = About::find($id);
        return view('About2.form', compact('abouts'));
    }

    public function edit3($id)
    {
        $abouts = About::find($id);
        return view('About3.form', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        About::find($id)->update($request->all());
        return redirect()->route('About.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return redirect()->route('About.index');
    }
}
