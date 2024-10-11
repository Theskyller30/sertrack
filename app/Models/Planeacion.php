<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planeacion extends Model
{
    use HasFactory;
    protected $table = "planeacion";
    protected $primarykey = "id";
    protected $fillable = ['fecha_global',
  'fecha_programa',
  'confirmacion_traida',
  'ingreso_planta',
  'documentos_lleno',
  'cita_puerto',
  'observacion_op',
  'validacion_piso',
  'alerta_repetidos',
  'remisionado',
  'modalidad',
  'vehiculo',
  'conductor',
  'hora_cita_ktn',
  'cantidad_cont',
  'incoterms',
  'pedido',
  'cliente',
  'contenedor',
  'tara',
  'payload',
  'uvi',
  'n_servicio',
  'reserva',
  'linea_naviera',
  'patio_retiro',
  'tipo_contenedor',
  'peso_mercancia',
  'puerto_ingreso',
  'motonave',
  'fecha_documental',
  'corte_documental',
  'fecha_fisico',
  'hora_fisico',
  'eta_mn',
  'puede_bajar_piso',
  'tipo_modalidad',
  'sitio_cargue',
  'remision',
  'manifiesto',
  'dias_libres_piso',
  'status',
  'obs_viaje_fallido',
  'cumplimiento',
  'cedula_conductor',
  'destino2',
  'generador',
  'estado_operación',
  'on_time',
  'horas_planta',
  'created_at',
  'updated_at'];

}
