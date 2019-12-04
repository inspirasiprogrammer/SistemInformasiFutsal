<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Supplier::paginate(10);
        return view("supplier.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view("supplier.form");
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
            'alamat' => 'required|max:100',
            'telepon' => 'required|digits_between:5,15|numeric'

            ]);

            $Supplier = new supplier;
            $Supplier->nama = $request->nama;
            $Supplier->alamat = $request->alamat;
            $Supplier->telepon = $request->telepon;
            $Supplier->save();

            
        $request->session()->flash("info","Berhasil Tambah Data supplier");

        return redirect()->route("supplier.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Supplier::find($id);
        return view("Supplier.form",compact("data"));
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
         $request->validate([
            'nama' => 'required|max:50',
            'alamat' => 'required|max:100',
            'telepon' => 'required|digits_between:5,15|numeric'

            ]);

            Supplier::where("id",$id)
            ->update($request->except(["_token","_method"]));
    
            $request->session()->flash("info","Berhasil Rubah Data Supplier");
    
            return redirect()->route("supplier.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);

        return redirect()->route("supplier.index")
            ->with("info","Berhasil Hapus Data Supplier");
    }
}
