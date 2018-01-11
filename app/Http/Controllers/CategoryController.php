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
            return response()->json(['error' => 'No content.'],406);
        }
    }

    public function get($id)
    {
        try
        {
            // Log::info('Get category id: '.$id);
            $result = DB::select("CALL getCategory(?)",[$id]);
            return response()->json($result, 200);
        } 
        catch(ModelNotFoundException $e)
        {
            return response()->json(['error' => 'No content.'],406);
        }
    }
}
