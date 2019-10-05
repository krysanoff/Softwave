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
    public function getYearData($year)
    {
        $yearData = Year::where('year', $year)->first();

        $result = new \stdClass();
        $result->year = $year;
        $result->circles = $yearData->circles->toArray();
        $result->categories = $yearData->categories->toArray();

        return json_encode($result);
    }
}
