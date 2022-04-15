<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function getAll(){
        return Order::all();
    }


    public function get(Request $req){
        $order=order::where('OID',$req->id)->first();

        if($order){
            $order->customer = $order->customer; 
            return response()->json($order,200);
        }
        return response()->json(["msg"=>"Order Not Found"],404);
    }

    public function deleteOrder($id){
        $order=Order::where('OID',$id)->first();
          if($order){ 
            $order= $order->delete();
            if ($order){
                return response()->json(["msg"=>"Order Delete Successfully"],200);
               }
               return response()->json(["msg"=>"Order Delete Failed"],500);
           }
           return response()->json(["msg"=>"Order Not Found"],404);
       }


  

}
