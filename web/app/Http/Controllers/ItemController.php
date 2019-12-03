<?php

namespace App\Http\Controllers;
use App\jenis;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::paginate(10);
        return view("item.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis = jenis::all();
        return view("item.form",compact("jenis"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'stok' => 'required|digits_between:1,6|numeric',
            'satuan' => 'require|max:50',
            'jual' => 'required|digits_between:1,6|numeric',
            'beli' => 'required|digits_between:1,6|numeric'
        ]);

        $item = new item;
        $item->nama = $request->nama;
        $item->stok = $request->stok;
        $item->jenis_id = $request->jenis_id;
        $item->satuan = $request->satuan;
        $item->jual = $request->$jual;
        $item->beli = $request->$beli;
        $item->save();

        $request->session()->flash("info","Berhasil Tambah Data Item");

        return redirect()->route("item.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Item::find($id);
        $jenis = jenis::all();
        return view("item.form",compact("data","jenis"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $request->validate([
            'nama' => 'required|max:50',
            'stok' => 'required|digits_between:1,6|numeric',
            'satuan' => 'require|max:50',
            'jual' => 'required|digits_between:1,6|numeric',
            'beli' => 'required|digits_between:1,6|numeric'
        ]);

        Item::where("id",$id)
        ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Item");

        return redirect()->route("item.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::destroy($id);

        return redirect()->route("item.index")
            ->with("info","Berhasil Hapus Data Item");
    }
}
