<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Returnmail
 *
 * @property $number_ruturnm
 * @property $description
 * @property $specifications
 * @property $site
 * @property $created_at
 * @property $updated_at
 * @property $id_employ
 *
 * @property Employ $employ
 * @property Rpt $rpt
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Returnmail extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id', 'description', 'specifications', 'site', 'id_employ', 'id_rpt'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employ()
    {
        return $this->belongsTo(\App\Models\Employ::class, 'id_employ', 'id');


    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rpt()
    {

        return $this->belongsTo(\App\Models\Rpt::class, 'id_rpt', 'id');
    }


}
