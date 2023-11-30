<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    protected $table = 'alkoto';

    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nev',
    ];

    public function artwork(): BelongsToMany
    {
        return $this->belongsToMany(Artwork::class, 'kapcsolat', 'alkotoid', 'muid');
    }
}
