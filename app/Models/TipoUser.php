<?php

namespace App\Models;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{
    use HasFactory;

    protected $table = 'tipo_users';
    protected $fillable = ['IdUser', 'Tipo'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
