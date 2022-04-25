<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetalleFactura;
use App\Models\Producto;
use App\Models\User;
use App\Models\Compras;

class Detalle extends Component
{
    public function render($id)
    {
        return view('livewire.detalle');
    }
}
