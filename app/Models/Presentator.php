<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Presentator extends Model
{
    use HasFactory;


    public function podcasts(): BelongsToMany {
        return $this->belongsToMany(
            Podcast::class,
            'podcast_presentator',
            'presentator_id',
            'podcast_id'
        );
    }
}
