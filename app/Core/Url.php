<?php
/**
 * Created by PhpStorm.
 * User: angel
 * Date: 19/05/2017
 * Time: 11:13
 */

namespace Core;
use Core\Controller;

class Url extends Controller {

    function __construct(){
        parent::__construct();
    }

    public  function rediUrl(){
        return $this->URL_SELF();
    }

}