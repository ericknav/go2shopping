<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $result = DB::select("CALL getLanguage()");
        //return "Product";
        return response()->json($result, 200);
        //return response()->json([], status:200);
        //return response()->json([], status:201);
    }

    public function post()
    {
        return response()->json([], 201);
    }

    public function put(Request $request, $id)
    {
        if($request->isJson())
        {
            return response()->json([], 200);
        }
        return response()->json(['error' => 'Unauthorized'],401,[]);
    }

    public function delete($id)//($idate(format))
    {
        return response()->json('Removed successfully.',200);
    }

    /*function getToken(Request $request)
    {
        if($resquest->isJson())
        {
            try
            {
                $data = $request->json()->all();
                $user = User::where(column:'username',$data['username'])->first();
                if($user && Hash::check($data['password'],$user->password))
                {
                    return respose()->json($user,status:200);
                }
                else
                {
                    return respose()->json(['error'=>'No content'],status:406);
                }
            }catch(ModelNotFoundException $se){
                return respose()->json(['error'=>'No content'],status:406);
            }
        }
        return respose()->json(['error'=>'Unauthorized'],status:500);
    }//*/

    //
}
