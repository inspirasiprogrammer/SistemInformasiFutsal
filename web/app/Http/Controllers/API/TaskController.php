<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LapaResource;
use App\Http\Resources\LapbResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\DashboardResource;

class TaskController extends Controller
{
    //
    public function getdashboard($id){
        $buktia = \App\Buktia::where("user_id", $id)
                    ->get()->toArray();
        $buktib = \App\Buktib::where("user_id", $id)
                    ->get()->toArray();
        $merged = array_merge($buktia,$buktib);


        return response()->json($merged);
    }

    public function getlapangana($idlapa){
        $lapangan= \App\Lapa::find($idlapa);

        return response()->json(new LapaResource($lapangan));
    }
    public function getlapanganb($idlapb){
        $lapangan= \App\Lapb::find($idlapb);

        return response()->json(new LapbResource($lapangan));
    }

    

    public function postStatus(Request $request){
        $request->validate([
            "idkerja" => "required"
        ]);

        Task::where("id",$request->idkerja)
            ->update(["status" => "sel"]);

        return response()->json([
            "status" => true,
        ]);
    }

   

    public function postPassword(Request $request){
        $request->validate([
            "iduser" => "required|exists:users,id",
            "passwordbaru" => "required|confirmed"
        ]);

        $user = \App\Sifut::find($request->iduser);
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

        $user = \App\Sifut::where("email",$request->email)
                        ->select("password")
                        ->first();

        if($user){
            if(\Hash::check($request->password,$user->password)){
                return response()->json([
                    "status" => true
                ]);
            }
        }

        return response()->json([
            "status" => false
        ]);
    }
}
