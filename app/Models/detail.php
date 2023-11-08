<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'details', 'field' => 'id', 'length' => 20, 'prefix' => 'DTL-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }


    public function trx()
    {
        return $this->belongsTo(transaksi::class, 'id_transaksi');
    }
    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_produk');
    }
}
