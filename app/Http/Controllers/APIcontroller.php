<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class APIcontroller extends Controller
{
    public function allProductsData()
    {
        // Get Api
        // product no data return aape 
        $data = product::all();
        return response()->json($data);
    }

    // aa product no data accept kare che insert kare che ane aapde aane pacho responce ma aapi ye siye 
    public function insertdata(Request $request)
    {


        //exception handling
        
        try
        {
            $data = [
                "pname"=>$request->productname,
                "pdescription"=>$request->description,
                "price"=>$request->price,
                "pcatagery"=>$request->category,
            ];
            product::create($data);
    
            // $obj = new product;
            // $obj->pname = $request->pname;
    
            return response()->json([
                'message' => 'product are successfully inserted',
                'status'=>true,
            ]); 
        }
        catch(\Exception $e)
        {
            return response()->json([
                'message' => 'product are not successfully inserted',
                'status'=>false,
            ]);    
        } 
    }
}