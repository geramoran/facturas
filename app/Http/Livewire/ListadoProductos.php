<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class ListadoProductos extends Component
{
    public function render()
    {
        return view('livewire.listado-productos', [
            'productos' => Producto::all()
        ]);
    }
}
