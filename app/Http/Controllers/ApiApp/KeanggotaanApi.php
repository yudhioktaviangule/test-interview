<?php

namespace App\Http\Controllers\ApiApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keanggotaan;
class KeanggotaanApi extends Controller
{
    public function cari($queryString='')
    {
        $keanggotaan = Keanggotaan::where('name','like',"%$queryString%")
                            ->orWhere('alamat','like',"%$queryString%")
                            ->orWhere('telepon','like',"%$queryString%")
                            ->orWhere('email','like',"%$queryString%")
                            ->limit(10)
                            ->get();
        $data = [];
        foreach($keanggotaan as $key => $value):
            $data[$key] = $value->toArray();
            $data[$key]['action'] = "
            <a href='". route('anggota.show',['anggotum'=>$value->id]) ."' class='btn btn-sm btn-block btn-primary'>
                Tampil
            </a>
            ";
        endforeach;
        return response()->json($data);
    }
    public function default()
    {
        $keanggotaan = Keanggotaan::where('name','like',"%$queryString%")
                        ->limit(10)
                        ->get();
        $data = [];
        foreach($keanggotaan as $key => $value):
            $data[$key] = $value->toArray();
            $data[$key]['action'] = "
            <a href='". route('anggota.show',['anggotum'=>$value->id]) ."' class='btn btn-sm btn-block btn-primary'>
                Tampil
            </a>
            ";
        endforeach;
        return response()->json($data);
    }
}
