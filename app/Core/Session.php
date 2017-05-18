<?php

/**
 * Description of Model
 *
 * @author Angel de la cruz
 */

namespace Core;

use Core\DB;

/**
 * Description of Session
 *
 * @author angel
 */
class Session {

    /**
     * Inicia la sesion
     */
    public static function init() {
        session_start();
    }

    /**
     *
     * @param type $key
     * @param type $value
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     *
     * @param string $key
     * @return string devuele un string - contenido de la sesión
     */
    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }

    /**
     * Destruye la session
     */
    public static function destroy() {

        $_SESSION = array();

        // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
        // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
            );
        }

        // Finalmente, destruir la sesión.

        session_destroy();
    }

    /**
     * Selecciona la información del usuario conectado en el momento.
     * Para no tener que recargar la información o salir de la sessión
     * 
     * @return type
     * 
     */
    public static function login() {

        $db = new DB();

        $result = $db->select('SELECT * FROM users WHERE id=:id LIMIT 1', array('id' => $_SESSION['user_id']));
        foreach ($result as $value) {
            return $value;
        }
    }

}
