<?php

namespace Login;
/**
 * Created by PhpStorm.
 * User: Angel
 * Date: 26/3/2017
 * Time: 9:45 PM
 */

use Core\DB;
use Core\Session;


class Login{

    /**
     * @param array $data
     */
    public function getLogin($data = [] ){
        $db = new DB();

        $stm = $db->prepare(
            "SELECT user_id,role_id,name,lastname,email, password FROM login  WHERE email=:email"
        );

        $resultado = $stm->execute(array(
            ':email' => $data['email']
        ));

        if (!$resultado){
            return [
                'type'  =>  'warning',
                'error' =>  'notificación',
                'msg'   =>  'Correo invalido!',
            ];
        }

        $data_session = $stm->fetch();
        if (password_verify($data['password'], $data_session['password'])) {
            //loggin
            Session::init();
            Session::set('role', $data_session['role_id']);
            Session::set('userid', $data_session['user_id']);
            Session::set('name', $data_session['name']);
            Session::set('lastname', $data_session['lastname']);
            Session::set('loggIn', true);
            return [
                'msg' => "login",
            ];
        } else {
            return [
                'type'  =>  'warning',
                'error' =>  'notificación',
                'msg'   =>  'Contraseña o correo invalido!',
            ];
            
        }
    }
}





