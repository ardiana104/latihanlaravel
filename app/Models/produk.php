<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $primaryKey= 'produkID';
    public function panens(){
        return $this->hasMany(Panen::class,'produkID','produkID');
    }

}
