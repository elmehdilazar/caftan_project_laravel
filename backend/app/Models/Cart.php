<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    public function products():HasMany{
        return $this->hasMany(Product::class , 'prod_id');
    }
    public function sessions():HasMany{
        return $this->hasMany(Session::class , 'session_id');
    }
    protected $fillable = [
        'prod_id',
        'session_id',
        'qte',
        'size',
        'mesure'
    ];
}
