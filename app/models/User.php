<?php  namespace Models;


use Core\DB;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author angel
 */
class User {
    
    
    public function __construct() {
       
    }


    public function GetUser(){
        echo "Lista de usuarios";
    }


    public function add($data){

        $db = new DB();

        $email =  $db->select("SELECT * FROM login");
        foreach ($email as $value){
            if ($value->email == $data['email']){
                return [
                    'error' => 'info',
                    'msg' => "Lo sentimos el correo que usted intenta registrar ya esta ocupado!",
                    'notification' => "Lo sentimos!"
                ];
            }
        }
        return $db->insert('login', $data);

    }
}
