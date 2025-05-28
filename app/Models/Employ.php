<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employ
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $pass
 * @property $created_at
 * @property $updated_at
 *
 * @property Returnmail[] $returnmails
 * @property Rpt[] $rpts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employ extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'type', 'pass'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnmails()
    {
        return $this->hasMany(\App\Models\Returnmail::class, 'id', 'id_employ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rpts()
    {
        return $this->hasMany(\App\Models\Rpt::class, 'id', 'id_employ');
    }
    
}
