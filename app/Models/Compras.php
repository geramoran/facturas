<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $fillable = ['IdUser', 'IdProducto'];
    public $timestamps = true;

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'IdUser');
    }

    public function productos()
    {
        return $this->hasOne(Producto::class, 'id', 'IdProducto');
    }
}
