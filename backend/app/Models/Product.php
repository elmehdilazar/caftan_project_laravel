<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public function category_product():BelongsTo{
        return $this->belongsTo(Category_product::class , 'category_id');
    }
    public function user():HasMany{
        return $this->hasMany(User::class , 'user_id');
    }
    protected $fillable = [
        'qte',
        'status',
        'price',
        'user_id',
        'image',
        'categorie_id'
    ];
}
