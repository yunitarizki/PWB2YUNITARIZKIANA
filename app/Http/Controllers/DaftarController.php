<?php

namespace App\Http\Controllers;

use App\Models\daftar;
use Illuminate\Http\Request;
use DB;

class DaftarController extends Controller
{
    //
    function index()
    {
        // ->paginate(1);
        $data = daftar::orderBy('id', 'asc')->get(); //dalam kurung menunjukan jum yg akan diatmpilkan
        return view('daftar/index')->with('data', $data);
    }
    function tambahdaftar()
    {
        return view('daftar/tambah');
    }
    function insertdaftar(Request $request){
        //dd($request->all());
        daftar::create($request->all());
        return redirect()->route('daftar');
    }

    function tampilkandata($id){
        $data = daftar::find($id);
        // dd($data);
        return view('daftar/ubah', compact('data'));
    }

    function updatedata(Request $request, $id){
        $data = daftar::find($id);
        $data->update($request->all());
        return redirect()->route('daftar')->with('success', 'Data Berhasil di Update ya');
    }
    function delete($id){
        $data = daftar::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('daftar')->with('success', 'Data Berhasil di Hapus ya');
    }
}

    // function grafik(){
    //     $data = daftar::select(DB::raw("reting"))->pluck('reting');

    //     return view('daftar/percetakan_grafik', compact('data'));
    // }

