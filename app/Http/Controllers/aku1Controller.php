<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akus1;
class aku1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aku1 = akus1::all();
        return view('aku1.index',compact('aku1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aku1.create');
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
            'nama_obat' => 'required|unique:aku1|max:255',
            'jenis_obat' => 'required|max:23',
            'harga_jual' => 'required|max:23'
        ]);

        $aku1 = new akus1;
        $aku1->nama_obat = $request->nama_obat;
        $aku1->jenis_obat = $request->jenis_obat;
        $aku1->harga_jual = $request->harga_jual;
        $aku1->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aku1 = akus1::findOrFail($id);
        return view('aku1.show',compact('aku1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aku1 = akus1::findOrFail($id);
        return view('aku1.edit',compact('aku1'));
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
            'nama_obat' => 'required|unique:aku1|max:255',
            'jenis_obat' => 'required|max:23',
            'harga_jual' => 'required|max:23'
        ]);

        // update data berdasarkan id
        $aku1 = akus1::findOrFail($id);
        $aku1->nama_obat = $request->nama_obat;
        $aku1->jenis_obat = $request->jenis_obat;
        $aku1->harga_jual = $request->harga_jual;
        $aku1->save();
        return redirect()->route('aku1.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aku1 = akus1::findOrFail($id);
        $aku1->delete();
        return redirect()->route('aku1.index');
    }
}
