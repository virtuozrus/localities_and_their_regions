<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $name_translit
 * @property int $locality
 */
class District extends Model
{
    protected $table = 'districts';

    public $timestamps = false;

    public function locality()
    {
        return $this->belongsTo(Locality::class, 'id', 'locality');
    }
}
