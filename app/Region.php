<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $name_translit
 */
class Region extends Model
{
    protected $table = 'regions';

    public $timestamps = false;

    public function localities()
    {
        return $this->hasMany(Locality::class, 'region', 'id');
    }
}
