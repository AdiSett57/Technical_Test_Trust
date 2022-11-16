<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; //library pdf

class GenerateController extends Controller
{

    public function index()
    {
        //menampilkan halaman laporan
        return view('data-jadwal');
    }

    public function export()
    {
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('data-jadwal', ['data' => 'ini adalah contoh laporan PDF']);
        //mendownload laporan.pdf
        return $data->download('laporan.pdf');
    }
}
