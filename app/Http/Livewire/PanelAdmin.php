<?php

namespace App\Http\Livewire;

use App\Models\DetalleFactura;
use Livewire\Component;
use App\Models\Factura;

class PanelAdmin extends Component
{
    public function render()
    {
        return view('livewire.panel-admin',[
            'facturas' => Factura::all()
        ]);
    }
}
