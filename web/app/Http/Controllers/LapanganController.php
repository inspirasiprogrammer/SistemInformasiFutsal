<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = DB::table("tblbooking as a")
                    ->join("users as b","a.user_id","=","b.id")
                    ->select("b.name as nama_user",
                            "a.sesi","a.lama","a.status")
                    ->where("item_id",4)
                    ->get();
        $n=0;
        $count=count($booking);
        $koleksi=[];
        $data=[array('koleksi')];
        for ($i = 0; $i <= 14; $i++) {
            if ($booking[$n]->sesi==$i+8) {
                $data[$i]=[
                    "status"=>$booking[$n]->status,
                    "sesi"=>$i+8,
                    "lama"=>$booking[$n]->lama,
                    "user"=>$booking[$n]->nama_user
                ];
                if ($n<($count-1)){
                    $n=$n+1;
                }
                
            } else {
                $data[$i]=[
                    "status"=>"k",
                    "sesi"=>$i+8,
                    "lama"=>0,
                    "user"=>null
                ];
            }
        }
        $i=0;
        return view("dashboard",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
