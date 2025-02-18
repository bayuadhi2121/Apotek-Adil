<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;
    public function produk()
    {
        return $this->hasOne(Produk::class, 'id_kategori');
    }
}
