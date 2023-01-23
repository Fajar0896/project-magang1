<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    
    use HasFactory;
    protected $guarded= ['id'];
    protected $table ="transactions";
    protected $primaryKey  = "id";
    protected $fillable = ['id','item_id','buyer_id','tanggal','jenis_pembayaran'];

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function payment(){
        return $this->hasMany(Payment::class);
    }

}
