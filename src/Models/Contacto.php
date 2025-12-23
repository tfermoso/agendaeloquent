<?php
namespace Formacom\Agenda\Models;

use Illuminate\Database\Eloquent\Model;
class Contacto extends Model
{
    protected $table = 'contacto';
    protected $primaryKey = 'contacto_id';

    protected $fillable = [
        'usuario_id',
        'nombre',
        'telefono',  
    ];  

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }
}
?>