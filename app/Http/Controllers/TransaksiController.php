<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Data Transaksi');
        return view('transaksi.index', $data);
    }

    public function show($id)
    {
        $data = array('title' => 'Detail Transaksi');
        return view('transaksi.show', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Transaksi');
        return view('transaksi.edit', $data);
    }

}
