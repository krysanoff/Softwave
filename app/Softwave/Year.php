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

    /**
     * @param int $year
     * @return false|string
     */
    public static function getYear(int $year)
    {
        $yearData = self::where('year', $year)->first();

        $result = new \stdClass();
        $result->year = $year;
        $result->circles = $yearData->circles->toArray();
        $result->categories = $yearData->categories->toArray();

        return json_encode($result);
    }
}
