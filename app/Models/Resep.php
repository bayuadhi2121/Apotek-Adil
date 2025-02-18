<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'reseps', 'field' => 'id', 'length' => 20, 'prefix' => 'RSP-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
