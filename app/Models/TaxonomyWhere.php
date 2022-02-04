<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Translatable\HasTranslations;

class TaxonomyWhere extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['name', 'description', 'excerpt'];
    
    public function author(): BelongsTo {
        return $this->belongsTo("\App\Models\User", "user_id", "id");
    }

    public function ugc_pois(): BelongsToMany {
        return $this->belongsToMany(UgcPoi::class);
    }

    public function ugc_tracks(): BelongsToMany {
        return $this->belongsToMany(UgcTrack::class);
    }

    public function ugc_media(): BelongsToMany {
        return $this->belongsToMany(UgcMedia::class);
    }

    public function ecMedia(): MorphToMany {
        return $this->morphedByMany(EcMedia::class, 'taxonomy_whereable');
    }

    public function ecTrack(): MorphToMany {
        return $this->morphedByMany(EcTrack::class, 'taxonomy_whereable');
    }

    public function ecPoi(): MorphToMany {
        return $this->morphedByMany(EcPoi::class, 'taxonomy_whereable');
    }

    public function featureImage(): BelongsTo {
        return $this->belongsTo(EcMedia::class, 'feature_image');
    }
}


