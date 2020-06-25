<?php

/**
 * @author: César Escudero <cesar@shocklogic.com>
 * @copyright: © 2020 Shocklogic, all rights reserved worldwide
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
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
     * 
     */
    public $timestamps = false;

    /**
     * We set the primary key to null since the table doesnt have one
     *
     * @var mixed
    */
    protected $primaryKey = null;

    /**
     * We set the auto incrementing to null since the table doesnt have primary key
     *
     * @var mixed
    */
    public $incrementing = false;
}
