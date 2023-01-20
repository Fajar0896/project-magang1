<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $table= "tipes";
    protected $primaryKey="id";
    protected $fillable = (['id','tipe']);
    // public function payment(){
    //     return $this->hasMany(Payment::class);
    // }
}
// ONE