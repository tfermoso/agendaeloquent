<?php
namespace Formacom\Agenda\Models;

use Illuminate\Database\Eloquent\Model;
class Usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
   

    protected $fillable = [
        'nombre',
        'email',
        'password',
    ];
    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'usuario_id', 'usuario_id');
    }
}
