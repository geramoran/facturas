<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function compra(Request $request)
    {
        $compra = new Compras();
        $compra->IdUser = Auth::user()->id;
        $compra->IdProducto = $request->Producto;
        $compra->save();
        return redirect('/')->with('success', 'Compra realizada con éxito');
    }
}
