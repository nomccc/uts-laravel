<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Alert;

use function Laravel\Prompts\alert;

class BajuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $baju = DB::table('bajus')->get();
        return view('dashboard', ['baju' => $baju]);
    }

    public function model()
    {
        $model = DB::table('model_bajus')->get();
        return view('tambahBaju', ['model' => $model]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arrayToString = join(',', $request->input('ukuran'));
        //
        DB::table('bajus')->insert([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'ukuran' => $arrayToString,
            'model_id' => $request->model,
            'user_id' => $request-> user()->id
        ]);
        return redirect('/tambahBaju');
        // return redirect('/tambahBaju')->with('success', 'category berhasil ditambah');;
        // alert("tambah data sukses");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapusBaju( $id)
    {
        DB::table('bajus')->where('id', $id)->delete();
        return redirect('/dashboard');
    }
}
