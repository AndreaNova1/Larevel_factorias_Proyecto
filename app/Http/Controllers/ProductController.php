<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listar()
    {
        $data['product'] = Producto::paginate(5);

        return view('produc.listar', $data);
    }
}
