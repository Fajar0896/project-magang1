<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $table = 'supplies';
    protected $primaryKey ="id";
    protected $fillable = [
        'id','nama_supplier','no_telp','alamat'
    ];

    public function dataItem(){
        return $this->hasMany(Item::class);
    }
}

