<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class TaxonomyWhere extends Model
{
    use HasFactory;
    public function ecTracks(): MorphToMany {
        return $this->morphedByMany(EcTrack::class, 'taxonomy_whereable');
    }
}


