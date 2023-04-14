<?php

namespace App\Http\Controllers;

use App\Models\bobot;
use Illuminate\Http\Request;
use DB;

class BobotController extends Controller
{
    //
    function index()
    {
        // ->paginate(1);
        $data = bobot::orderBy('id', 'asc')->get(); //dalam kurung menunjukan jum yg akan diatmpilkan
        return view('daftar/bobot')->with('data', $data);
    }
    function tambahbobot()
    {
        return view('daftar/tambahkanbobot');
    }
    function insertbobot(Request $request){
        //dd($request->all());
        bobot::create($request->all());
        return redirect()->route('bobot');
    }

    function tampilkanbobot($id){
        $data = bobot::find($id);
        // dd($data);
        return view('daftar/ubahbobot', compact('data'));
    }

    function updatebobot(Request $request, $id){
        $data = bobot::find($id);
        $data->update($request->all());
        return redirect()->route('bobot')->with('success', 'Data Berhasil di Update ya');
    }
    function deletebobot($id){
        $data = bobot::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('bobot')->with('success', 'Data Berhasil di Hapus ya');
    }

    function home()
    {
        // ->paginate(1);
        $data = bobot::orderBy('id', 'asc')->get(); //dalam kurung menunjukan jum yg akan diatmpilkan
        return view('/home')->with('data', $data);
    }
}
