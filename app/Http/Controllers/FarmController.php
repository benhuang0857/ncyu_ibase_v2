<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Farm;
use Carbon\Carbon;
use DateTimeInterface;
use DB;

class FarmController extends Controller
{
    public function post(Request $req)
    {      
        $farm = Farm::create($req->all());

        return response()->json($farm, 200);
    }

    public function getOne()
    {
        $farm = Farm::orderBy('created_at', 'desc')->first();
        return response()->json($farm, 200);
    }

    public function getFarm()
    {
        $now = Carbon::now();
        $start = $now->copy()->startOfDay();

        $records = collect();
        for($start;$start<$now->copy()->endOfDay();$start->addHour()){
            $record = Farm::whereBetween('created_at',[$start->copy()->subHour(), $start])->first();
            if(!is_null($record))
            {
                $records->push($record);
            }
        }
        return response()->json($records);
    }
}
