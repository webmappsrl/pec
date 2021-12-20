<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Storage;

class EcMedia extends Model
{
    use HasFactory;

    public function ecPois(): BelongsToMany {
        return $this->belongsToMany(EcPoi::class);
    }

    public function ecTracks(): BelongsToMany {
        return $this->belongsToMany(EcTrack::class);
    }

    public function taxonomyActivities(): MorphToMany {
        return $this->morphToMany(TaxonomyActivity::class, 'taxonomy_activityable');
    }

    public function taxonomyPoiTypes(): MorphToMany {
        return $this->morphToMany(TaxonomyPoiType::class, 'taxonomy_poi_typeable');
    }

    public function taxonomyThemes(): MorphToMany {
        return $this->morphToMany(TaxonomyTheme::class, 'taxonomy_themeable');
    }

    public function taxonomyWheres(): MorphToMany {
        return $this->morphToMany(TaxonomyWhere::class, 'taxonomy_whereable');
    }

    public function featureImageEcPois(): HasMany {
        return $this->hasMany(EcPoi::class, 'feature_image');
    }

    public function featureImageEcTracks(): HasMany {
        return $this->hasMany(EcTrack::class, 'feature_image');
    }

    public function thumbnail($size): string {
        $thumbnails = json_decode($this->thumbnails, true);
        $result = substr($this->url, 0, 4) === 'http' ? $this->url : Storage::disk('public')->path($this->url);
        if (isset($thumbnails[$size]))
            $result = $thumbnails[$size];

        return $result;
    }
}
