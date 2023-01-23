
@extends('need.main')
@section('konten')
@section('judul', 'Dashboard')
@section('dash', 'active')

    <div class="d-flex flex-wrap">
        <div class="dashcontent pt-3">  
            <div class="row">
                <div class=" col-lg-2 m-4 product-content text-center shadow">
                    <p class="label-detail">{{ $pay }} Data</p>
                    <p class="label-detail1"><i class="bi bi-credit-card-fill"></i> Pembayaran</p>
                    <a href="/payment" class="btn mb-2">Details</a>
                </div>
                <div class=" col-lg-2 m-4 product-content text-center shadow">
                    <p class="label-detail">{{ $buy }} Data</p>
                    <p class="label-detail1"><i class="bi bi-person-circle"></i> Pembeli</p>
                    <a href="/buyer" class="btn mb-2">Details</a>
                </div>
                <div class=" col-lg-2 m-4 product-content text-center shadow">
                    <p class="label-detail">{{ $item }} Data</p>
                    <p class="label-detail1"><i class="bi bi-bag-fill"></i> Barang</p>
                    <a href="/item" class="btn mb-2">Details</a>
                </div>
                <div class=" col-lg-2 m-4 product-content text-center shadow">
                    <p class="label-detail">{{ $sup }} Data</p>
                    <p class="label-detail1"><i class="bi bi-people-fill"></i> Supplier</p>
                    <a href="/supply" class="btn mb-2">Details</a>
                </div>
                <div class=" col-lg-2 m-4 product-content text-center shadow">
                    <p class="label-detail">{{ $tran }} Data</p>
                    <p class="label-detail1"><i class="bi bi-cash-stack"></i> Transaksi</p>
                    <a href="/transaction" class="btn mb-2">Details</a>
                </div>
            </div>
        </div>
    </div>  


@endsection