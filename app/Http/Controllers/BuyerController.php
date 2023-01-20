<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buyer::all();
        return view('buyer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nama_pembeli' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);
        
        $data = $request->all();
        Buyer::create($data);
        return redirect ('/buyer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('buyer.detail',compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('buyer.edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        $request-> validate([
            'nama_pembeli' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $datalama = Buyer::findOrfail($buyer->id);
        $databaru = $request->all();
        $datalama -> update($databaru);
        return redirect('/buyer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        Buyer::destroy(($buyer->id));
        return redirect('/buyer');
    }
}
