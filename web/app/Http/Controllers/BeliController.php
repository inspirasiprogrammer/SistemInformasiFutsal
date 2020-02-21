<?php

namespace App\Http\Controllers;

use App\Item;
use App\DetailBeli;
use App\Beli;
use App\Tempdtlbeli;
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
        Tempdtlbeli::truncate();
       
        $row=1;
        $nama=1;
        $barang=Item::all();
        $supplier= Supplier::all();
        $jumlah = DB::table('tbltempdtlbeli')->sum('total');
        return view("pembelian.form",compact("barang","row","supplier","jumlah","nama"));
        
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
        
        
        $dtlbeli = new Tempdtlbeli;
        $dtlbeli->item_id = $request->namabarang;
        $dtlbeli->qty = $request->qty;
        $dtlbeli->total = $request->jumlah;
        $dtlbeli->save();

        $row=1;
        $nama=$request->supid;
        $data = Tempdtlbeli::all();
        $barang=Item::all();
        $supplier= Supplier::all();
        $jumlah = DB::table('tbltempdtlbeli')->sum('total');
        return view("pembelian.form",compact("barang","row","data","supplier","jumlah","nama"));
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
        $beli = Tempbeli::find(1);
        $barang=Item::all();
        $supplier=Supllier::all();
        return view("pembelian.form",compact("barang","row","beli","supplier","data"));
    }
    
    public function getbeli($itemid){
        return response()->json(Item::selectRaw('beli,nama')->find($itemid));
    }

    public function simpan(Request $request){
        
        $tempdtlbeli = Tempdtlbeli::all();

        // insert data beli
        $beli = new beli;
        $beli->supplier_id = $request->hiddensupplier;
        $beli->tanggal = date('Y-m-d H:i:s');
        $beli->jumlah = DB::table('tbltempdtlbeli')->sum('total');
        $beli->save();
        
        // insert data detailbeli
        foreach ($tempdtlbeli as $i => $item){
            $dtlbeli[$i] = new DetailBeli();
            $dtlbeli[$i]->beli_id = $beli->id;
            $dtlbeli[$i]->item_id = $item->item_id;
            $dtlbeli[$i]->qty = $item->qty;
            $dtlbeli[$i]->total = $item->total;
            $dtlbeli[$i]->save();
            // $dtlbeli[$i] = (new Detailbeli())->forceCreate($item->only(['beli_id', 'item_id', 'qty','total']));
        }

        return redirect()->route("beli.store");
        
    }
    public function deletebeli($id){
        DB::table('tbldtlbeli')->where('beli_id', $id)->delete();
        Beli::destroy($id);
        return redirect()->route('beli.index');
    }
    public function batal(){
        $row=1;
        $data = Tempbeli::all();
        $barang=Item::all();
        return view("penbelian.detail",compact("barang","row","data"));
    }
    
}
