<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class produk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';

    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'produks', 'field' => 'id', 'length' => 20, 'prefix' => 'PRDK-' . date('ym'), 'reset_on_prefix_change' => true]);
        });
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value); // Use Laravel's Str helper to generate a slug.
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
