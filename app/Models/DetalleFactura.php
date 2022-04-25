<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;
    protected $table = 'detalle_facturas';
    protected $fillable = ['IdFactura', 'IdCompra'];
    public $timestamps = true;

    public function factura(){
        return $this->hasOne(Factura::class, 'id', 'IdFactura');
    }

    public function compras(){
        return $this->hasOne(Compras::class, 'id', 'IdCompra');
    }
}
