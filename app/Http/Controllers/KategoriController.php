<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
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
