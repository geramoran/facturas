<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'facturas';
    protected $fillable = ['impuestoCobrado', 'total'];
    public $timestamps = true;

    public function detalleFacturas(){
        return $this->hasOne(DetalleFactura::class, 'IdFactura', 'id');
    }
}
