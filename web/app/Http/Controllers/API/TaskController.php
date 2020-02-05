<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LapaResource;
use App\Http\Resources\LapbResource;
use App\Http\Resources\BookingResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\DashboardResource;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;

class TaskController extends Controller
{
    //
    public function getdashboard($idcustomer){
        $data = \App\booking::where("user_id",$idcustomer)
                    ->get();
        return response()->json($data);
    }

    public function getlapangana(){
        // $booking= \App\booking::where("id",$id)
        //             ->first();
        $booking= \App\booking::where("item_id",3)
                        
                        ->get();
        $n=0;
        $count=count($booking);
        $koleksi=[];
        $data=array('koleksi');
        for ($i = 0; $i <= 14; $i++) {
            if ($booking[$n]->sesi==$i+8) {
                $data[$i]=[
                    "status"=>$booking[$n]->status,
                    "sesi"=>$i+8
                ];
                if ($n<($count-1)){
                    $n=$n+1;
                }
                
            } else {
                $data[$i]=[
                    "status"=>"k",
                    "sesi"=>$i+8
                ];
            }
            
        }
        

        return response()->json($data);
    }
    public function getlapanganb(){
        $booking= \App\booking::where("item_id",4)
                        ->get();
        $n=0;
        $count=count($booking);
        $koleksi=[];
        $data=array('koleksi');
        for ($i = 0; $i <= 14; $i++) {
            if ($booking[$n]->sesi==$i+8) {
                $data[$i]=[
                    "status"=>$booking[$n]->status,
                    "sesi"=>$i+8
                ];
                if ($n<($count-1)){
                    $n=$n+1;
                }
                
            } else {
                $data[$i]=[
                    "status"=>"k",
                    "sesi"=>$i+8
                ];
            }
            
        }

        return response()->json($data);
    }
    public function getdetailbooking($idbooking){
        $booking = \App\booking::find($idbooking);

        return response()->json(new BookingResource($booking));
    }

    public function postFilebukti(Request $request){
        if($request->hasFile("filebukti")){
            $booking = \App\booking::find($request->idbooking);
            Storage::delete("/public/buktipembayaran".$booking->filename);
            $fullpath = $request->file("filebukti")
                        ->store("/public/buktipembayaran");
            
            $filename = explode("/",$fullpath)[2];

            $booking->filename = $filename;
            $booking->save();
        }

        return response()->json([
            "status" => true,
            "profilepic" => $filename
        ]);
    }

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

    public function postBooking(Request $request){

        $booking = new \App\booking;
        $booking->item_id = $request->lapangan;
        $booking->user_id = $request->idcustomer;
        $booking->tanggal = date('Y-m-d');
        $booking->sesi = $request->sesi;
        $booking->lama = $request->lama;
        $booking->status = 'p';
        $booking->save();

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
            // if(\Hash::check($request->password,$customer->password)){
            if($request->password==$customer->password){
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

   
}