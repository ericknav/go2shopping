<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get($productId=0)
    {
        try
        {
            $result = DB::select("CALL getProduct(?)",[$productId]);
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

    public function getList($categoryId=0)
    {
        try
        {
            $result = DB::select("CALL getProductList(?)",[$categoryId]);
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

    public function getCustomList($mallId=0,$categoryId=0,$productId=0)
    {
        try
        {
            $result = DB::select("CALL getMallProductList(?,?,?)",[$mallId,$categoryId,$productId]);
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
