<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akus2;
class Aku2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aku2 = akus2::all();
        return view('aku2.index',compact('aku2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aku2.create');
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
            'nama_penumpang' => 'required|unique:aku2|max:255',
            'tanggal_pembelian' => 'required|max:23',
            'tujuan' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        $aku2 = new akus2;
        $aku2->nama_penumpang = $request->nama_penumpang;
        $aku2->tanggal_pembelian = $request->tanggal_pembelian;
        $aku2->tujuan = $request->tujuan;
        $aku2->harga = $request->harga;
        $aku2->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aku2 = akus2::findOrFail($id);
        return view('aku2.show',compact('aku2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aku2 = akus2::findOrFail($id);
        return view('aku2.edit',compact('aku2'));
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
            'nama_penumpang' => 'required|unique:aku2|max:255',
            'tanggal_pembelian' => 'required|max:23',
            'tujuan' => 'required|max:23',
            'harga' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $aku2 = akus2::findOrFail($id);
        $aku2->nama_penumpang = $request->nama_penumpang;
        $aku2->tanggal_pembelian = $request->tanggal_pembelian;
        $aku2->tujuan = $request->tujuan;
        $aku2->harga = $request->harga;
        $aku2->save();
        return redirect()->route('aku2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aku2 = akus2::findOrFail($id);
        $aku2->delete();
        return redirect()->route('aku2.index');
    }
}
