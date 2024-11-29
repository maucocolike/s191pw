<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'cliente';

    protected $fillable = ['nombre', 'correo', 'telefono'];
}
