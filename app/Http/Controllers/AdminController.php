<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Factura;
use App\Models\DetalleFactura;
use App\Models\User;

use function PHPUnit\Framework\isNull;

class AdminController extends Controller
{
    public function createFacturas(){

        $totalImpuesto = 0;
        $total = 0;
        $facturaArray = [];
        $facturas = DetalleFactura::all();
        $compras = Compras::whereNotIn('id', $facturas->pluck('IdCompra'))->get();
        if($compras->all() == null){
            return redirect('/')->with('error', 'No hay compras para facturar');
        }
        $iniFactura = Factura::create([
            'impuestoCobrado' => 0,
            'total' => 0
        ]);
        foreach($compras as $compra){
            array_push($facturaArray, [
                'idCompra' => $compra->id,
                'idFactura' => $iniFactura->id
            ]);
            $total += $compra->productos->precio;
            $totalImpuesto += ($compra->productos()->first()->impuesto * $compra->productos()->first()->precio) / 100;

        }
        $iniFactura->update([
            'impuestoCobrado' => $totalImpuesto,
            'total' => $total
        ]);
        $detalle = DetalleFactura::insert($facturaArray);
        return redirect('/')->with('success', 'Factura creada con éxito');
    }

    public function detalle($id){
        $detalles = DetalleFactura::with('factura', 'compras')->where('idFactura', $id)->get();
        $res = [];
        $total = $detalles[0]->factura->total;
        $impuestoTotal = $detalles[0]->factura->impuestoCobrado;
        foreach($detalles as $detalle){
            $compra = $detalle->compras()->with('users', 'productos')->first();
            array_push($res, [
                'usuario' => $compra->users->name,
                'producto' => $compra->productos->nombre,
                'precio' => $compra->productos->precio,
                'impuesto' => $compra->productos->impuesto * $compra->productos->precio / 100,
            ]);
        }
        return view('livewire.detalle')->with([
            'total' => $total,
            'impuestoTotal' => $impuestoTotal,
            'detalle' => $res
        ]);
    }
}
