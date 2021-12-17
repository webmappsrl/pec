<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Translatable\HasTranslations;

class TaxonomyWhere extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['name', 'description', 'excerpt'];
    
    public function ecTracks(): MorphToMany {
        return $this->morphedByMany(EcTrack::class, 'taxonomy_whereable');
    }
}


