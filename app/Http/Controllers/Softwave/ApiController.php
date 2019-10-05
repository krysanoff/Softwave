<?php

namespace App\Http\Controllers\Softwave;

use App\Http\Controllers\Controller;
use App\Softwave\Year;
use Illuminate\Http\Request;

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
        $yearData = Year::where('year', $year)->get();

        return $yearData->toJson();
    }
}
