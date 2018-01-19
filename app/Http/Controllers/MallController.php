<?php

namespace App\Http\Controllers;
use DB;
use Log;
use Illuminate\Http\Request;

class MallController extends Controller
{
    public function get($mallId=0)
    {
        try
        {
            $result = DB::select("CALL getMall(?)",[$mallId]);
            return response()->json($result, 200);
        } 
        catch(ModelNotFoundException $e)
        {
            return response()->json(['Error' => 'No content.'+$e->getMessage()],406);
        }
        catch(Exception $e)
        {
            return response()->json(['Error' => 'Message: '.$e->getMessage()],400);
        }
    }

    public function getList()
    {
        try
        {
            $result = DB::select("CALL getMallList(?)",[0]);
            return response()->json($result, 200);
        } 
        catch(ModelNotFoundException $e)
        {
            return response()->json(['Error' => 'No content.'+$e->getMessage()],406);
        }
        catch(Exception $e)
        {
            return response()->json(['Error' => 'Message: '.$e->getMessage()],400);
        }
    }
}
