<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Locality
 * @package App
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

    public function region()
    {
        return $this->belongsTo(Region::class, 'id', 'region');
    }

    public function districts()
    {
        return $this->hasMany(District::class, 'locality', 'id');
    }
}
