<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastry extends Model
{
    protected $fillable = [
        'name', 'type', 'award_winning'
    ];

    protected $casts = [
        'award_winning' => 'boolean',
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }

    public function price() {
        return $this->hasOne(Price::class);
    }
}
