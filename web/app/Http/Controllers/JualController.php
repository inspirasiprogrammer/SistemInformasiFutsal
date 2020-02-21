<?php

namespace App\Http\Controllers;

use App\Item;
use App\DetailJual;
use App\Jual;
use App\Tempdtljual;
use App\Tempjual;
use App\Jenisbayar;
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
        $data = Jual::paginate(10);
        return view("penjualan.list",compact("data"));
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
        $jual = Tempjual::find(1);
        $barang=Item::all();
        $kustomer = Sifut::where('level','c')
                    ->orderBy('name')
                    ->get();
        return view("penjualan.detail",compact("barang","row","jual","kustomer"));
        
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
        DB::table('tbltempjual')
            ->where('id', 1)
            ->update(['user_id' => $request->custid]);
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
        $kustomer = Sifut::where('level','c')
                    ->orderBy('name')
                    ->get();
        return view("penjualan.detail",compact("barang","row","data","jual","kustomer"));
        
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
        Tempdtljual::destroy($id);
        $data = Tempdtljual::all();
        $row=1;
        $jual = Tempjual::find(1);
        $barang=Item::all();
        $kustomer = Sifut::where('level','c')
                    ->orderBy('name')
                    ->get();
        return view("penjualan.detail",compact("barang","row","jual","kustomer","data"));
    }

    public function getjual($itemid){
        return response()->json(Item::selectRaw('jual,nama')->find($itemid));
    }
    public function bayar(){
        $jual = Tempjual::find(1);
        return view("penjualan.bayar",compact("jual"));
    }
    public function simpan(Request $request){
        // ambil data temporary
        $tempjual = Tempjual::find(1);
        $tempdtljual = Tempdtljual::all();

        // insert data jual
        $jual = new Jual;
        $jual->user_id = $tempjual->user_id;
        $jual->tanggal = date('Y-m-d H:i:s');
        $jual->jumlah = $tempjual->jumlah;
        $jual->save();
        
        // insert data detailjual
        foreach ($tempdtljual as $i => $item){
            $dtljual[$i] = new DetailJual();
            $dtljual[$i]->jual_id = $jual->id;
            $dtljual[$i]->item_id = $item->item_id;
            $dtljual[$i]->qty = $item->qty;
            $dtljual[$i]->total = $item->total;
            $dtljual[$i]->save();
            // $dtljual[$i] = (new DetailJual())->forceCreate($item->only(['jual_id', 'item_id', 'qty','total']));
        }

        // insert data jenisbayar
        if ($request->bayar>0){
            $tunai= new Jenisbayar;
            $tunai->jual_id = $jual->id;
            $tunai->jenis = 't';
            $tunai->jlh = $request->bayar-$request->kembalian;
            $tunai->save();
        }

        if ($request->debit>0){
            $debit= new Jenisbayar;
            $debit->jual_id = $jual->id;
            $debit->jenis = 'd';
            $debit->jlh = $request->debit;
            $debit->save();
        }

        if ($request->kredit>0){
            $kredit= new Jenisbayar;
            $kredit->jual_id = $jual->id;
            $kredit->jenis = 'k';
            $kredit->jlh = $request->kredit;
            $kredit->save();
        }

        return redirect()->route("jual.store");
        
    }
    public function batal(){
        $row=1;
        $data = Tempdtljual::all();
        $jual = Tempjual::find(1);
        $barang=Item::all();
        return view("penjualan.detail",compact("barang","row","data","jual"));
    }
    public function kembali(){
        $data = Tempdtljual::all();
        return redirect()->route("jual.index")
            ->with(['data' => $data]);
    }
    // public function editbanyak(Request $request,$id){
    //     DB::table('tbltempdtljual')
    //         ->where('id', $id)
    //         ->update(['qty' => $request->banyakbarang]);
    // }
    public function deletejual($id){
        DB::table('tbldetailjual')->where('jual_id', $id)->delete();
        DB::table('tbljenisbayar')->where('jual_id', $id)->delete();
        Jual::destroy($id);
        return redirect()->route('jual.index');
    }
}
