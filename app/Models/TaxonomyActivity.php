<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TaxonomyActivity extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name', 'description', 'excerpt'];

    public function ecMedia() {
        return $this->morphedByMany(EcMedia::class, 'taxonomy_whereable');
    }

    public function ecTrack() {
        return $this->morphedByMany(EcTrack::class, 'taxonomy_whereable');
    }

    public function featureImage(): BelongsTo {
        return $this->belongsTo(EcMedia::class, 'feature_image');
    }
}
