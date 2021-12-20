<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class EcTrack extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name', 'description', 'excerpt', 'difficulty'];

    public function ecMedia(): BelongsToMany {
        return $this->belongsToMany(EcMedia::class);
    }

    public function ecPois(): BelongsToMany {
        return $this->belongsToMany(EcPoi::class);
    }

    public function taxonomyWheres() {
        return $this->morphToMany(TaxonomyWhere::class, 'taxonomy_whereable');
    }

    public function taxonomyThemes() {
        return $this->morphToMany(TaxonomyTheme::class, 'taxonomy_themeable');
    }

    public function taxonomyActivities() {
        return $this->morphToMany(TaxonomyActivity::class, 'taxonomy_activityable')
            ->withPivot(['duration_forward', 'duration_backward']);
    }

    public function featureImage(): BelongsTo {
        return $this->belongsTo(EcMedia::class, 'feature_image');
    }
}
