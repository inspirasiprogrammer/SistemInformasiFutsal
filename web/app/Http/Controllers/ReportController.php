<?php

namespace App\Http\Controllers;

use App\Item;

use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function semuareport(Request $request){
        $data = DB::table("tbljual as a")
                    ->join("users as b","a.user_id","=","b.id")
                    ->select("b.name as nama_customer",
                            "a.tanggal","a.jumlah")
                    ->whereBetween("tanggal",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->get();
        
        $total = DB::table('tbljual')
                    ->whereBetween("tanggal",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->get()
                    ->sum('jumlah');

        if($request->get("jenis")=="pdf"){
            $detail = [
                "daritanggal" => $request->get("daritanggal"),
                "sampaitanggal" => $request->get("sampaitanggal")
            ];

            $pdf = PDF::loadView('admin.pdf.semua', compact("data","detail","total"));
            return $pdf->stream();
        }else{
            return view("admin.laporan.semua",compact("data","total"));
        }
    }

    public function itemreport(Request $request){

        $data = DB::table("tbldetailjual as a")
                        ->join("tblitem as b","a.item_id","=","b.id")
                        ->select("b.nama as nama_item",
                            "a.jual_id","a.qty","a.total","a.created_at")
                        ->whereBetween("a.created_at",[
                            $request->get("daritanggal"),
                            $request->get("sampaitanggal")
                        ])
                        ->where("item_id",$request->get("item"))
                        ->get();

        $jumlah = DB::table('tbldetailjual')
                    ->whereBetween("created_at",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->where("item_id",$request->get("item"))
                    ->get()
                    ->sum('total');
        $banyak = DB::table('tbldetailjual')
                    ->whereBetween("created_at",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->where("item_id",$request->get("item"))
                    ->get()
                    ->sum('qty');
        if($request->get("jenis")=="pdf"){
            $detail = [
                "item" => Item::find($request->get("item")),
                "daritanggal" => $request->get("daritanggal"),
                "sampaitanggal" => $request->get("sampaitanggal")
            ];
            $pdf = PDF::loadView('admin.pdf.item', compact("data","detail","jumlah","banyak"));
            return $pdf->stream();
        }else{
            $barang = Item::all();
            return view("admin.laporan.item",compact("barang","data","jumlah","banyak"));
        }
    }

    public function semuabelireport(Request $request){
        $data = DB::table("tblbeli as a")
                    ->join("tblsupplier as b","a.supplier_id","=","b.id")
                    ->select("b.nama as nama_supplier",
                            "a.tanggal","a.jumlah")
                    ->whereBetween("tanggal",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->get();
                    
        $total = DB::table('tblbeli')
                    ->whereBetween("tanggal",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->get()
                    ->sum('jumlah');
        if($request->get("jenis")=="pdf"){
            $detail = [
                "daritanggal" => $request->get("daritanggal"),
                "sampaitanggal" => $request->get("sampaitanggal")
            ];

            $pdf = PDF::loadView('admin.pdf.semuabeli', compact("data","detail","total"));
            return $pdf->stream();
        }else{
            return view("admin.laporan.semuabeli",compact("data","total"));
        }
    }

    public function itembelireport(Request $request){

        $data = DB::table("tbldtlbeli as a")
                        ->join("tblitem as b","a.item_id","=","b.id")
                        ->select("b.nama as nama_item",
                            "a.beli_id","a.qty","a.total","a.created_at")
                        ->whereBetween("a.created_at",[
                            $request->get("daritanggal"),
                            $request->get("sampaitanggal")
                        ])
                        ->where("item_id",$request->get("item"))
                        ->get();

        $jumlah = DB::table('tbldtlbeli')
                    ->whereBetween("created_at",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->where("item_id",$request->get("item"))
                    ->get()
                    ->sum('total');
        $banyak = DB::table('tbldtlbeli')
                    ->whereBetween("created_at",[
                        $request->get("daritanggal"),
                        $request->get("sampaitanggal")
                    ])
                    ->where("item_id",$request->get("item"))
                    ->get()
                    ->sum('qty');

        if($request->get("jenis")=="pdf"){
            $detail = [
                "item" => Item::find($request->get("item")),
                "daritanggal" => $request->get("daritanggal"),
                "sampaitanggal" => $request->get("sampaitanggal")
            ];
            $pdf = PDF::loadView('admin.pdf.itembeli', compact("data","detail","jumlah","banyak"));
            return $pdf->stream();
        }else{
            $barang = Item::all();
            return view("admin.laporan.itembeli",compact("barang","data","jumlah","banyak"));
        }
    }
}
