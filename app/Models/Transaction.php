<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    
    use HasFactory;
    protected $guarded= ['id_transaksi'];
    protected $table = 'transactions';
    protected $fillable= [
        'id_transaksi','id_barang','id_pembeli','tanggal','keterangan'
    ];



    // protected $fillable = ['id_transaksi', 'id_barang', 'id_pembeli','nama_pembeli','nama_barang','total_bayar','tgl','keterangan'];

    // public function dataBuyer(){
    //     return $this->belongsTo(Buyer::class, "nama_pembeli", 'id_pembeli');
    // }
    // public function dataItem(){
    //     return $this->belongsTo(Buyer::class, "nama_barang", 'id_barang');
    // }
    public function dataPayment(){
        return $this->belongsTo(Buyer::class, "total_bayar", 'id_transaksi');
    }
}
