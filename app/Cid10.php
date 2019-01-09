<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cid10
 * @package App
 */
class Cid10 extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'nome',
    ];

    /**
     * @var string
     */
    protected $table = 'cid10';
}
