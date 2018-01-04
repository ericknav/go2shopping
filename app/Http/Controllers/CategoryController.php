<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getList()
    {
        $result = DB::select("CALL getCategoryList()");
        return response()->json($result, 200);
    }

    public function get($id)
    {
        $result = DB::select("CALL getCategory(?)",[$id]);
        return response()->json($result, 200);
    }
}
