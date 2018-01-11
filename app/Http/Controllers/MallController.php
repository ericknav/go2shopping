<?php

namespace App\Http\Controllers;
use DB;
use Log;
use Illuminate\Http\Request;

class MallController extends Controller
{
    public function getList()
    {
        try
        {
            $result = DB::select("CALL getMallList(?)",[0]);
            return response()->json($result, 200);
        } 
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => 'No content.'],406);
        }
    }

    public function get($id)
    {
        try
        {
            $result = DB::select("CALL getMall(?)",[$id]);
            return response()->json($result, 200);
        } 
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => 'No content.'],406);
        }
    }
}
