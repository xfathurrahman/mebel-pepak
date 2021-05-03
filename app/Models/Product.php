<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'nama',
        'harga',
        'deskripsi',
        'kategori_id',
    ];


    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class,'kategori_id', 'id');
    }

    public function images(): HasOne
    {
        return $this->hasOne(Image::class,'product_id','id');
    }
}
