<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employs extends Authenticatable
{
    use HasFactory;

    protected $tabla = 'employs';

    protected $fillable = [
        'name',
        'type',
        'pass',
    ];

    protected $hidden = [
        'pass',
    ];

    public function getAuthPassword()
    {
        return $this -> pass;
    }

    public $timestamps = false;


    //
}
