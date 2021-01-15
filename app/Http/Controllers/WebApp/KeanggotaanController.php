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
        return view("keanggotaan.index");
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
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
