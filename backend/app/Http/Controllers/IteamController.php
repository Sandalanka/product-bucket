<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iteam;
use DB;
class IteamController extends Controller
{
    

    public function additeam(Requset $request)
    {
        $table=new Iteam();

        $table->name=$request['name'];
        $table->quantity=$request['quantity'];
        $table->price=$request['price'];
        $table->save();

        return response()->json(['message'=>$table],201);
    }

    public function iteam()
    {
        $iteam=Iteam::all();
        return response()->json(['iteam'=>$iteam],200);

    }

    public function deleteiteam($id)
    {
       $iteam=Iteam::find($id);
       if(!$iteam)
       {

        return response()->json(['msg'=>"Not Found Iteam"],404);
       }
       else{
$iteam->delete();
        return response()->json(['msg'=>"Delete Successfull"],201);

       }
   

    }
    public function edititeam(Request $request,$id)
    {
        $iteam=Iteam::find($id);
        if(!$iteam)
        {
            return response()->json(['msg'=>"Not Found Iteam"],404);
        }
        else{
            $iteam->name=$request['name'];
            $iteam->quantity=$request['quantity'];
            $iteam->price=$request['price'];
            $iteam->save();
    
            return response()->json(['message'=>$table],201);

        }
    }
    
}
