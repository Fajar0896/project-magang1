<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table ="items";
    protected $primaryKey = "id";
    protected $fillable= ['id','nama_barang','harga','stok','supplier_id'];

    public function supplier(){
        return $this->belongsTo(Supply::class);
    }
}
