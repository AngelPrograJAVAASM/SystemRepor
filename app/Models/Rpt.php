<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rpt
 *
 * @property $id
 * @property $description
 * @property $specifications
 * @property $site
 * @property $user_enes
 * @property $created_at
 * @property $updated_at
 * @property $id_employ
 * @property $quantity
 * @property $attended
 *
 * @property Employ $employ
 * @property Returnmail $returnmail
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rpt extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id', 'description', 'specifications', 'site', 'id_employ', 'attended'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employ()
    {
        return $this->belongsTo(\App\Models\Employ::class, 'id_employ', 'id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function returnmail()
    {
        return $this->hasOne(\App\Models\Returnmail::class, 'id', 'id_employ');
    }

}
