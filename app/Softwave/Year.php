<?php

namespace App\Softwave;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public $timestamps = false;

    /**
     * Relation to table 'circles'
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function circles()
    {
        return $this->hasMany('App\Softwave\Circle');
    }

    /**
     * Relation to table 'categories'
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Softwave\Category');
    }
}
