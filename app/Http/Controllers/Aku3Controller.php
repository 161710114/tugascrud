<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akus3;
class Aku3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aku3 = akus3::all();
        return view('aku3.index',compact('aku3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aku3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'merk_sepatu' => 'required|unique:aku3|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $aku3 = new akus3;
        $aku3->merk_sepatu = $request->merk_sepatu;
        $aku3->ukuran = $request->ukuran;
        $aku3->harga = $request->harga;
        $aku3->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aku3 = akus3::findOrFail($id);
        return view('aku3.show',compact('aku3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aku3 = akus3::findOrFail($id);
        return view('aku3.edit',compact('aku3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
            'merk_sepatu' => 'required|unique:aku3|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $aku3 = akus3::findOrFail($id);
        $aku3->merk_sepatu = $request->merk_sepatu;
        $aku3->ukuran = $request->ukuran;
        $aku3->harga = $request->harga;
        $aku3->save();
        return redirect()->route('aku3.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aku3 = akus3::findOrFail($id);
        $aku3->delete();
        return redirect()->route('aku3.index');
    }
}
