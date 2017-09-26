<?php

namespace creditocofrem;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class DetalleProdutos extends Model implements AuditableContract
{
    use Auditable;
    public static $ESTADO_INACTIVO = "I";
    public static $ESTADO_ACTIVO = "A";
    public static $ESTADO_ANULADO = "N";
    protected $fillable = [
        'numero_tarjeta',
        'fecha_cracion',
        'monto_inicial',
        'contrato_emprs_id',
        'user_id',
        'estado',
        'fecha_activacion',
        'fecha_vencimiento',
        'factura',
    ];

}
