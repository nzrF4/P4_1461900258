<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class dataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = DB::table('rak_buku')
                ->join('buku','buku.id','=','rak_buku.id_buku')
                ->join('jenis_buku','jenis_buku.id','=','rak_buku.id_jenis_buku')
                ->select('rak_buku.id as id','buku.judul as judul',
                         'jenis_buku.jenis as jenis','buku.tahun_terbit as tahun_terbit')
                ->get();

        return $data;
    }
}
