<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Translatable\HasTranslations;

class EcPoi extends Model
{
    use HasFactory, HasTranslations;

    public array $translatable = ['name', 'description', 'excerpt'];
    public function ecMedia(): BelongsToMany {
        return $this->belongsToMany(EcMedia::class);
    }

    public function ecTracks(): BelongsToMany {
        return $this->belongsToMany(EcTrack::class);
    }

    public function taxonomyWheres(): MorphToMany {
        return $this->morphToMany(TaxonomyWhere::class, 'taxonomy_whereable');
    }

    public function taxonomyWhens(): MorphToMany {
        return $this->morphToMany(TaxonomyWhen::class, 'taxonomy_whenable');
    }

    public function taxonomyTargets(): MorphToMany {
        return $this->morphToMany(TaxonomyTarget::class, 'taxonomy_targetable');
    }

    public function taxonomyThemes(): MorphToMany {
        return $this->morphToMany(TaxonomyTheme::class, 'taxonomy_themeable');
    }

    public function taxonomyActivities(): MorphToMany {
        return $this->morphToMany(TaxonomyActivity::class, 'taxonomy_activityable');
    }

    public function taxonomyPoiTypes(): MorphToMany {
        return $this->morphToMany(TaxonomyPoiType::class, 'taxonomy_poi_typeable');
    }

    public function featureImage(): BelongsTo {
        return $this->belongsTo(EcMedia::class, 'feature_image');
    }


}
