<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Data Customer');
        return view('customer.index', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Customer');
        return view('customer.edit', $data);
    }

}
