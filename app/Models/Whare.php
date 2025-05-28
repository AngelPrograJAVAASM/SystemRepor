<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Whare
 *
 * @property $number_maaterial
 * @property $description
 * @property $specifications
 * @property $tipo
 * @property $cost_reqs
 * @property $created_at
 * @property $updated_at
 * @property $number_reqs
 *
 * @property Req $req
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Whare extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id','description', 'specifications', 'quantity', 'tipo', 'cost_reqs', 'number_reqs'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function req()
    {
        return $this->belongsTo(\App\Models\Req::class, 'number_reqs', 'number_reqs');
    }

}
