<?php

namespace App\Http\Controllers\Softwave;

use App\Http\Controllers\Controller;
use App\Softwave\Year;

class ApiController extends Controller
{
    /**
     * Get some year data
     *
     * @param $year
     * @return
     */
    public function getYearData(int $year)
    {
        $yearData = Year::getYear($year);

        return $yearData;
    }

    /**
     * @return string
     */
    public function getAllYears()
    {
        $years = Year::all();

        return $years->toJson();
    }
}
