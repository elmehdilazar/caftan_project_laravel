<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie_product extends Model
{
    use HasFactory;
    public function product():BelongsTo{
        return $this->belongsTo(Product::class , 'prod_id');
    }
    protected $fillable = [
        'name'
    ];
}
