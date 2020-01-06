<?php

namespace App\Http\Controllers;

use App\Item;
use App\DetailBeli;
use App\Beli;
use App\Tempbeli;
use App\Supplier;
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
        $supplier=Supllier::all();
        return view("pembelian.form",compact("barang","row","supplier"));
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
        
        $dtlbeli = new Tempbeli;
        $dtlbeli->item_id = $request->namabarang;
        $dtlbeli->qty = $request->qty;
        $dtlbeli->total = $request->jumlah;
        $dtlbeli->save();

        


        $row=1;
        $data = Tempbeli::all();
        $barang=Item::all();
        $supplier=Supllier::all();
        return view("pembelian.form",compact("barang","row","data","supplier"));     

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
        $temp=Tempbeli::find($id);
        Tempdtlbeli::destroy($id);
        $data = Tempdtlbeli::all();
        $row=1;
        $jual = Tempjual::find(1);
        $barang=Item::all();
        $supplier=Supllier::all();
        return view("penjualan.detail",compact("barang","row","jual","supplier","data"));
    }
    
    public function getjual($itemid){
        return response()->json(Item::selectRaw('jual,nama')->find($itemid));
    }

    public function simpan(Request $request){
        // ambil data temporary
        $tempbeli = Tempbeli::all();

        // insert data jual
        $jual = new Jual;
        $jual->supplier_id = $tempjual->supplier_id;
        $jual->tanggal = date('Y-m-d H:i:s');
        $jual->jumlah = $tempjual->total;
        $jual->save();
        
        // insert data detailjual
        foreach ($tempbeli as $i => $item){
            $dtlbeli[$i] = new DetailBeli();
            $dtlbeli[$i]->beli_id = $beli->id;
            $dtlbeli[$i]->item_id = $item->item_id;
            $dtlbeli[$i]->qty = $item->qty;
            $dtlbeli[$i]->jumlah = $item->jumlah;
            $dtlbeli[$i]->save();
            // $dtlbeli[$i] = (new DetailJual())->forceCreate($item->only(['jual_id', 'item_id', 'qty','total']));
        }

        // insert data jenisbayar
        

        return redirect()->route("jual.store");
        
    }
    public function deletebeli($id){
        DB::table('tbldetailbeli')->where('beli_id', $id)->delete();
        Beli::destroy($id);
        return redirect()->route('beli.index');
    }
    public function batal(){
        $row=1;
        $data = Tempbeli::all();
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data"));
    }
}
