<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Podcast extends Model {
    use HasFactory;

    public function comments(): HasMany {
        return $this->hasMany( Comment::class )->orderByDesc( 'created_at' );
    }

    public function presentators(): BelongsToMany {
        return $this->belongsToMany(
            Presentator::class,
            'podcast_presentator',
            'podcast_id',
            'presentator_id'
        );
    }
}
