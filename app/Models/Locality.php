<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Locality
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $name_translit
 * @property int $region
 */
class Locality extends Model
{
    protected $table = 'localities';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(District::class, 'locality', 'id');
    }

    /**
     * @param Builder $query
     * @param $inputSearch
     * @return Builder
     */
    public function scopeSearch(Builder $query, $inputSearch)
    {
        if (!$inputSearch) {
            return $query;
        }

        return $query
            ->where('name', 'LIKE', "%$inputSearch%")
            ->orWhere('name_translit', 'LIKE', "%$inputSearch%")
            ->orWhereHas('region', function ($q) use ($inputSearch) {
                $q->where('name', 'LIKE', "%$inputSearch%")
                    ->orWhere('name_translit', 'LIKE', "%$inputSearch%");
            })
            ->orWhereHas('districts', function ($q) use ($inputSearch) {
                $q->where('name', 'LIKE', "%$inputSearch%")
                    ->orWhere('name_translit', 'LIKE', "%$inputSearch%");
            });
    }
}
