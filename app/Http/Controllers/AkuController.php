<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akus;
class AkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aku = akus::all();
        return view('aku.index',compact('aku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('aku.create');
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
            'nama_pakaian' => 'required|unique:aku|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $aku = new akus;
        $aku->nama_pakaian = $request->nama_pakaian;
        $aku->ukuran = $request->ukuran;
        $aku->harga = $request->harga;
        $aku->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aku = akus::findOrFail($id);
        return view('aku.show',compact('aku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aku = akus::findOrFail($id);
        return view('aku.edit',compact('aku'));
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
            'nama_pakaian' => 'required|unique:aku|max:255',
            'ukuran' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $aku = akus::findOrFail($id);
        $aku->nama_pakaian = $request->nama_pakaian;
        $aku->ukuran = $request->ukuran;
        $aku->harga = $request->harga;
        $aku->save();
        return redirect()->route('aku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aku = akus::findOrFail($id);
        $aku->delete();
        return redirect()->route('aku.index');
    }
}
