<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    public $table = 'carts';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'carts', 'field' => 'id', 'length' => 20, 'prefix' => 'CRT-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }
    public function produk()
    {
        return $this->belongsTo(produk::class, 'id_produk');
    }
}
