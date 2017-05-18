<?php namespace Core;

/**
 * Description of Security
 * 
 * @author Angel
 */
class Security {

    public static function Hash($string) {
        return password_hash($string, PASSWORD_BCRYPT, ['cost' => 12]);
    }

    public static function Escape($string) {
        return htmlspecialchars($string);
    }

    public static function Digit($value = null) {
        if (!ctype_digit($value)) {
            return false;
        } else {
            return $value;
        }
    }

}
