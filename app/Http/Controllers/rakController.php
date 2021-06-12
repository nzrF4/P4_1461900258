<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\rak_buku;
use App\Models\jenis_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('rak_buku')
                ->join('buku','buku.id','=','rak_buku.id_buku')
                ->join('jenis_buku','jenis_buku.id','=','rak_buku.id_jenis_buku')
                ->select('rak_buku.id as id','buku.judul as judul',
                         'jenis_buku.jenis as jenis','buku.tahun_terbit as tahun_terbit')
                ->get();

        return view('rak0258', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
