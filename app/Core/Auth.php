<?php
/**
 * Description of Model
 *
 * @author Angel de la cruz
 */

namespace Core;

use Core\Session;
/**
 * Description of Auth
 *
 * @author angel
 */
class Auth {
   /**
     * Inicia la session
     * si no la encuentra lo saca.
     */    
    public static function handleLogin() {

        session_start();

        $logged = $_SESSION['loggIn'];
 
        if ($logged == false) {
            Session::destroy();
            header('location: Home');
            exit;
        }
    }
    /**
     * Destruye la sesion
     */
    public static function logout(){
            $_SESSION['loggIn'];
            Session::destroy();
            header("location: ../../Home");
            exit;
        }

}
