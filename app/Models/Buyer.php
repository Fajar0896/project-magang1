<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Buyer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table ="buyers";
    protected $primaryKey  = "id";
    protected $fillable = ['id','nama_pembeli','email','no_telp','alamat'];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

}
