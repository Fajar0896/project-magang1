<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Supply::all();
        return view('supply.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $data = $request->all();
        Supply::create($data);
        return redirect('/supply');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        return view('supply.edit', compact('supply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supply)
    {
        $request -> validate([
            'nama_supplier' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $datalama = Supply::findOrfail($supply->id);
        $databaru = $request->all();
        $datalama -> update($databaru);
        return redirect('/supply');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        Supply::destroy($supply->id);
        return redirect('/supply');
    }
}
