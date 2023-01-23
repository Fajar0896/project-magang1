<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table ="payments";
    protected $primaryKey  = "id";
    protected $fillable = ['id','tgl_bayar','total_bayar','transaction_id'];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
// MANY