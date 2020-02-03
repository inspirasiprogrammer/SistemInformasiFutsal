<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LapaResource;
use App\Http\Resources\LapbResource;
use App\Http\Resources\BookingResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\DashboardResource;

use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    //
    public function getdashboard($idcustomer){
        $data = \App\booking::where("user_id",$idcustomer)
                    ->get();
        return response()->json($data);
    }

    public function getlapangana($idlapa){
        $lapangan= \App\Lapa::find($idlapa);

        return response()->json(new LapaResource($lapangan));
    }
    public function getlapanganb($idlapb){
        $lapangan= \App\Lapb::find($idlapb);

        return response()->json(new LapbResource($lapangan));
    }
    public function getdetailbooking($idbooking){
        $booking = \App\booking::find($idbooking);

        return response()->json(new BookingResource($booking));
    }

    

    // public function postStatus(Request $request){
    //     $request->validate([
    //         "idkerja" => "required"
    //     ]);

    //     Task::where("id",$request->idkerja)
    //         ->update(["status" => "sel"]);

    //     return response()->json([
    //         "status" => true,
    //     ]);
    // }

   

    public function postPassword(Request $request){
        $request->validate([
            "idcustomer" => "required|exists:users,id",
            "passwordbaru" => "required|confirmed"
        ]);

        $user = \App\Sifut::find($request->idcustomer);
        $user->password = Hash::make($request->passwordbaru);
        $user->save();

        return response()->json([
            "status" => true
        ]);
    }

    public function postLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $customer = \App\Sifut::where("email",$request->email)
                        ->selectRaw("id,password")
                        ->first();

        if($customer){
            if(\Hash::check($request->password,$customer->password)){
                return response()->json([
                    "status" => true,
                    "idcustomer" => $customer->id
                ]);
            }
        }

        return response()->json([
            "status" => false
        ]);
    }

    // public function postLogin(Request $request){
    //     $request->validate([
    //         "email" => "required",
    //         "password" => "required"
    //     ]);

    //     $customer = \App\Sifut::where("email",$request->email)
    //                     ->select("id,password")
    //                     ->first();

    //     if($customer){
    //         if(\Hash::check($request->password,$user->password)){
    //             return response()->json([
    //                 "status" => true,
    //                 "idcustomer" => $user->id
    //             ]);
    //         }
    //     }

    //     return response()->json([
    //         "status" => false
    //     ]);
    // }
}
