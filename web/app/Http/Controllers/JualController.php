<?php

namespace App\Http\Controllers;

use App\Item;
use App\DetailJual;
use App\Jual;
use App\Tempdtljual;
use App\Tempjual;
use App\Sifut;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        DB::table('tbltempjual')->where('id',1)->update([
            'jumlah'=>0]);
        Tempdtljual::truncate();
        $row=1;
        $data = Tempdtljual::all();
        $jual = Tempjual::find(1);
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data","jual"));
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
        DB::table('tbltempjual')->increment('jumlah',$request->jumlah);
        $dtljual = new Tempdtljual;
        $dtljual->jual_id = 1;
        $dtljual->item_id = $request->namabarang;
        $dtljual->qty = $request->qty;
        $dtljual->total = $request->jumlah;
        $dtljual->save();

        $row=1;
        $data = Tempdtljual::all();
        $jual = Tempjual::find(1);
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data","jual"));
        
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
        $temp=Tempjual::find(1);
        $temp2=Tempdtljual::find($id);
        $jumlah=$temp->jumlah - $temp2->total;
        DB::table('tbltempjual')->where('id',1)->update([
            'jumlah'=>$jumlah]);
        Tempdtjual::destroy($id);
        $row=1;
        $data = Tempdtljual::all();
        $jual = Tempjual::find(1);
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data","jual"));
    }

    public function getjual($itemid){
        return response()->json(Item::selectRaw('jual,nama')->find($itemid));
    }
    public function bayar(){
        $jual = Tempjual::find(1);
        return view("penjualan.bayar",compact("jual"));
    }
    public function simpan(){
        $tempjual = Tempjual::all();
        $tempdtljual = Tempdtljual::all();

        $jual = new Jual;
        $jual->user_id = 6;
        $jual->tanggal = date('Y-m-d H:i:s');
        $jual->jumlah = $tempjual->jumlah;
        $jual->save();
        
        foreach ($tempdtljual as $item){
            $dtljual = new DetailJual;
            $dtljual->jual_id = $jual->id;
            $dtljual->item_id = $item->item_id;
            $dtljual->qty = $item->qty;
            $dtljual->total = $item->total;
            $dtljual->save();
        }
        

        return redirect()->view("penjualan.list");
        
    }
    public function batal(){
        $row=1;
        $data = Tempdtljual::all();
        $jual = Tempjual::find(1);
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data","jual"));
    }
}
