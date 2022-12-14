<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Kategori Produk');
        return view('kategori.index', $data);
    }

    public function create()
    {
        $data = array('title' => 'Form Kategori');
        return view('kategori.create', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Kategori');
        return view('kategori.edit', $data);
    }

}
