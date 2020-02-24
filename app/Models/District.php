<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 * @package App\Models
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locality()
    {
        return $this->belongsTo(Locality::class, 'locality');
    }
}
