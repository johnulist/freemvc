<?php namespace Core;

use Core\View;
/**
 * Description of Controller
 *
 * @author Angel De La Cruz
 */
class Controller {
    public function __construct() {
        $this->view = new View();
    }
}
