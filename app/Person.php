<?php

/**
 * @author: Cesar Escudero <cesar@shocklogic.com>
 * @copyright: © 2020 Shocklogic, all rights reserved worldwide
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Awobaz\Compoships\Compoships;

class Person extends Model
{
    use Compoships;

    /**
     * We set the table name to the actual one
     * 
     * @var string
     */
    protected $table = 'Persons';

    /**
     * Model's primary key
     * 
     * @var string
     */
    protected $primaryKey = 'Person_Id';

    /**
     * We turn off laravel default timestamps
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * Fields for mass assignment
     * 
     * @var array
     */
    protected $guarded = [];

    public function participants()
    {
        return $this->hasMany('App\Participant');
    }

    /**
     * Return the related country row
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(
            '\App\Country',
            ['Client_Id', 'Country_Code'],
            ['Client_Id', 'Country_Code']
        );
    }

    /**
     * Return Members relationship
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function membership()
    {
        return $this->hasOne(
            '\App\Member',
            ['Client_Id', 'Project_Id', 'Person_Id'],
            ['Client_Id', 'Project_Id', 'Person_Id']
        );
    }
}
