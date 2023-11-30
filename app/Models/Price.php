<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'pastry_id', 'price', 'unit',
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function pastry() {
        return $this->belongsTo(Pastry::class);
    }
}
