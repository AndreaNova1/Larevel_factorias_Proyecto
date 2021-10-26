<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listar()
    {
        $data['product'] = Products::paginate(5);

        return view('produc.listar', $data);
    }
}
