<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of View
 *
 * @author Angel de la cruz
 */
class View
{

    public function __construct()
    {
    }

    /**
     *
     * @param type $view nombre de la vista
     * @param type $data array con datos para presentar en la vista
     */
    public function view($view, $data = [])
    {

        if (!empty($view)):
            require_once '../app/views/' . $view . '.php';
        else:
            return [
                'error' => 'warning',
                'msg' => "No se pudo encontrar ninguna vista",
                'notification' => "Notificación"
            ];
        endif;
    }


}
