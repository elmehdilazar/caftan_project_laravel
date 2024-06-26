<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;
    public function cart():BelongsTo{
        return $this->belongsTo(Cart::class , 'cart_id');
    }
    protected $fillable = [
        'name'
    ];
}
