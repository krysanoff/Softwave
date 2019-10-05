<?php

namespace App\Softwave;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    /**
     * Relation to table 'years'
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function year ()
    {
        return $this->belongsTo('App\Softwave\Year');
    }
}
