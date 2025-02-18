<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends \Illuminate\Foundation\Auth\User
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'users', 'field' => 'id', 'length' => 20, 'prefix' => 'USR-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }
    public function cart()
    {
        return $this->hasMany(cart::class, 'id');
    }
    public function transaksi()
    {
        return $this->hasMany(transaksi::class, 'id_transaksi');
    }
}
