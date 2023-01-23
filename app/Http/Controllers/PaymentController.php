<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Payment::all();
        // dd($data);
        return view('payment.index', compact('data'))->with('transaction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaction = Transaction::all();
        return view('payment.create', compact('transaction'));
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
            'tgl_bayar' => 'required',
            'total_bayar' => 'required',
            'transaction_id' => 'required',
        ]);
        $data = $request->all();
        Payment::Create($data);
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view ('payment.detail', compact ('payment'))->with('transaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $transaction = Transaction::all();
        return view('payment.edit', compact('payment','transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request -> validate([
            'tgl_bayar' => 'required',
            'total_bayar' => 'required',
            'transaction_id' => 'required',
        ]);

        $datalama = Payment::findOrfail($payment->id);
        $databaru = $request->all();
        $datalama -> update($databaru);
        return redirect('/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Payment::destroy($payment->id);
        return redirect('/payment');
    }
}
