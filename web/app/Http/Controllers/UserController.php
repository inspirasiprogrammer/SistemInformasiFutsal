<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sifut;
use Auth;
use Illuminate\Support\Str;
use App\Mail\SendPasswordAkun;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Sifut::paginate(10);
        if (Auth::user()->level=='a'){
            return view("admin.list",compact("data"));
        }else{
            return view("customer.list",compact("data"));
        }
    }
    
    public function simpan(Request $request){
        $request->validate([
            'name' => "required|max:100"
        ]);
        //
       
        
        if($request->hasFile("profilepic")){
            $file = $request->file("profilepic")->extension();
            
            // $request->file("profilepic")
            //     ->storeAs("/public/profie"
            //     ,auth()->user()->id.",".$fileExt);
            Storage::delete("/public/profile".auth()->user()->filename);
         
            $fullpath = $request->file("profilepic")
                        ->store("/public/profile");

            $filename = explode("/",$fullpath)[2];
            \App\User::where('id',auth()->user()->id)
                ->update(["name" => $request->name,
                        "filename" => $filename ]);
            
        }else{
            \App\User::where('id',auth()->user()->id)
                    ->update(["name" => $request->name]);
        }

        
        return redirect()->route("user");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("customer.form");
        
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
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50'
        ]);

        $password = Str::random(10);

        // Staff::create($request->except("_token"));
        $user = new Sifut;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = $password;
        $user->save();

        Mail::to($request->email)
            ->send(new SendPasswordAkun($request->name,$password));

        $request->session()->flash("info","Berhasil Tambah Data Akun");

        return redirect()->route("user.index");
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
        $data = Sifut::find($id);
        return view("customer.form",compact("data"));
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
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50'
        ]);

        Sifut::where("id",$id)
            ->update($request->except(["_token","_method"]));

        $request->session()->flash("info","Berhasil Rubah Data Akun");

        return redirect()->route("user.index");
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
        Sifut::destroy($id);

        return redirect()->route("user.index")
            ->with("info","Berhasil Hapus Data Akun");
    }


}
