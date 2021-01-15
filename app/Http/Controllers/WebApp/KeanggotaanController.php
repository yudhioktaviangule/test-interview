<?php

namespace App\Http\Controllers\WebApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keanggotaan;
use App\Http\Requests\KartuNamaRequest;
class KeanggotaanController extends Controller
{
    public function index()
    {
        $data = Keanggotaan::get();
        return view("keanggotaan.index",compact("data"));
    }


    public function create()
    {   

        return view("keanggotaan.create");
    }


    public function store(KartuNamaRequest $request)
    {
        $post = $request->only(
            "name",
            "alamat",
            "telepon",
            "email"
        );
        
        $anggota = new Keanggotaan();
        $anggota->fill($post);
        $anggota->save();
        return redirect(route("anggota.index"));
            
        
    }

  
    public function show($id)
    {
        $data = Keanggotaan::where("id",$id)->first();
        return view("keanggotaan.tampil",compact("data"));
    }

    
    public function edit($id)
    {
        $data = Keanggotaan::where("id",$id)->first();
        if($data == NULL):
            return redirect(route('anggota.index'))->withErrors(['Data anggota tidak ditemukan']);
        else:
            return view("keanggotaan.edit",compact("data"));
        endif;
    }

    
    public function update(Request $request, $id)
    {
        $data          = Keanggotaan::where("id",$id)->first();
        $data->name    = $request->name == NULL ? $data->name : $request->name;
        $data->email   = $request->email == NULL ? $data->email : $request->email;
        $data->alamat  = $request->alamat == NULL ? $data->alamat : $request->alamat;
        $data->telepon = $request->telepon == NULL ? $data->telepon : $request->telepon;
        $data->save();
        return redirect(route("anggota.index"));
    }

    
    public function destroy($id)
    {
        Keanggotaan::where("id",$id)->delete();
        return redirect(route("anggota.index"));
    }
}
