<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'transaksis', 'field' => 'id', 'length' => 20, 'prefix' => 'TRX-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function cart()
    {
        return $this->hasMany(cart::class, 'id_cart');
    }
}
