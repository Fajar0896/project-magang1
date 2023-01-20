<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'Items';
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_barang','harga','stok'
,'id_supplier'];

    public function dataSupplier(){
        return $this->belongsTo(Supply::class);
    }
}
