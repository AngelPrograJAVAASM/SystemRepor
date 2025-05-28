<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Req
 *
 * @property $number_reqs
 * @property $all_reqs
 * @property $numeber_material
 * @property $created_at
 * @property $updated_at
 *
 * @property Whare[] $whares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Req extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['number_reqs', 'all_reqs', 'numeber_material'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function whares()
    {
        return $this->hasMany(\App\Models\Whare::class, 'number_reqs', 'number_reqs');
    }

}
