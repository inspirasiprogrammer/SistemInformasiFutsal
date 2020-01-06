<?php

namespace App\Http\Controllers;

use App\Item;
use App\DetailBeli;
use App\Beli;
use App\Tempbeli;
use App\Sifut;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Beli::paginate(10);
        return view("pembelian.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        Tempbeli::truncate();
        $row=1;
        $barang=Item::all();
        $kustomer = Sifut::where('level','c')
                    ->orderBy('name')
                    ->get();
        return view("penjualan.detail",compact("barang","row","kustomer"));
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
        
        $dtlbeli = new DetailBeli;
        $dtlbeli->jual_id = 1;
        $dtlbeli->item_id = $request->namabarang;
        $dtlbeli->qty = $request->qty;
        $dtlbeli->jumlah = $request->jumlah;
        $dtlbeli->save();

        


        $row=1;
        $data = Tempbeli::all();
        $barang=Item::all();
        $kustomer = Sifut::where('level','c')
                    ->orderBy('name')
                    ->get();
        return view("penjualan.detail",compact("barang","row","data","kustomer"));     

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
