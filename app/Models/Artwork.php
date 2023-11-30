<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artwork extends Model
{
    protected $table = 'mu';

    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = [
        'cim',
        'eredeti',
        'szinhaz',
        'ev',
        'felvonas',
        'kep',
    ];

    public function artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'kapcsolat', 'muid', 'alkotoid');
    }
}
