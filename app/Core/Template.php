<?php

namespace Core;

/**
 * Description of Template
 *
 * @author angel
 */
class Template {

    /**
     * 
     * @param type $string el nombre del accesorio ejemplo: Menu, footer, Navgator, top_menu.
     * @param type $res
     */
    public static function Accesory($string = "") {
        if (!empty($string)) {
            require '../App/Views/Templates/' . "{$string}.php";
        } else {
            return [
                'error' => "warning",
                "messages" => "El parametro no puede estar vacio al llamar este metodo"
            ];
        }
    }

}
