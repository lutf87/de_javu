<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Produk');
        return view('produk.index', $data);
    }

    public function create()
    {
        $data = array('title' => 'Form Produk Baru');
        return view('produk.create', $data);
    }

    public function show($id)
    {
        $data = array('title' => 'Foto Produk');
        return view('produk.show', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Produk');
        return view('produk.edit', $data);
    }

}
