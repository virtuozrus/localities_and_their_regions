<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $name_translit
 */
class Region extends Model
{
    protected $table = 'regions';

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function localities()
    {
        return $this->hasMany(Locality::class, 'region', 'id');
    }
}
