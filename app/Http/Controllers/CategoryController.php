<?php

namespace App\Http\Controllers;
use DB;
use Log;
//use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getList()
    {
        try
        {
            //Log::info('Show all categories.');
            $result = DB::select("CALL getCategoryList()");
            //$result = Category::all();
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

    public function get($categoryId=0)
    {
        try
        {
            // Log::info('Get category id: '.$id);
            $result = DB::select("CALL getCategory(?)",[$categoryId]);
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
