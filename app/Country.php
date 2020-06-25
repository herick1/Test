<?php

/**
 * @author: Cesar Escudero <Cesar@shocklogic.com>
 * @copyright: © 2020 Shocklogic, all rights reserved worldwide
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Awobaz\Compoships\Compoships;

class Country extends Model
{
    use Compoships;

    /**
     * Fields for mass assignment
     * 
     * @var array
     */
    protected $guarded = [];

    /**
     * We turn off laravel default timestamps
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * Model's primary key
     * 
     * @var array
     */
    protected $primaryKey = ['Country_Code', 'Client_Id'];

    /**
     * Turning off auto incrementing
     * 
     * @var bool
     */
    public $incrementing = false;
}
