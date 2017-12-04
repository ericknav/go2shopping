<?php

namespace App\Http\Controllers;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        //$result = DB::select("CALL getLanguage()");
        //return "Product";
        return response()->json([], 200);
        //return response()->json([], status:200);
        //return response()->json([], status:201);
    }

    public function post()
    {
        return response()->json([], 201);
    }

    /*public function put(Request request, $id)
    {
        return response()->json([], 200);
    }*/

    public function delete($id)//($idate(format))
    {
        return response()->json('Removed successfully.',200);
    }

    //
}
