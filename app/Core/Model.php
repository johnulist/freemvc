<?php

namespace Core;

/**
 * Description of Model
 *
 * @author Angel de la cruz
 */
class Model
{
    /**
     * Carga modelo
     * @param type $model tipo string nombre del modelo a cargar
     * @return \Core\model instancia del modelo
     */
    public function model($model)
    {
        if (!empty($model)):
            require_once '../app/models/' . $model . '.php';
            return new $model();
        else:
            return [
                'error' => 'warning',
                'msg' => "No se pudo encontrar ningún modelo",
                'notification' => "Notificación"
            ];
        endif;

    }

}
