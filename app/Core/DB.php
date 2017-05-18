<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of DB
 *
 * @author Angel de la cruz
 */
class DB extends \PDO {

    private $_host = "127.0.0.1";
    private $_username = "root";
    private $_password = "";


    private $_dbname = "mini_mvc";

    public function __construct() {


        try {
            parent::__construct("mysql:host={$this->_host};dbname={$this->_dbname};charset=utf8", "{$this->_username}", "{$this->_password}");

            $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $ex) {
            die($ex->getMessage());
        }
    }

    /**
     * Para selecccionar datos a la tabla
     * @param $sql  Puedes enviar un sql normal/ tambien un select condicional
     * @param array $array condicion en el array
     * @param $fetchMode
     * @return array
     *
     * Por ejemplo: DB->select('select name FROM user WHERE id=:id',['id' => 1]);
     *
     */
    public function select($sql, $array = array(), $fetchMode = \PDO::FETCH_OBJ) {

        try {
            $stm = $this->prepare($sql);

            foreach ($array as $key => $value) {
                $stm->bindValue(":$key", $value);
            }
            $stm->execute();
            return $stm->fetchAll($fetchMode);
        } catch (\Exception $e) {
            return [
                'error' => 'warning',
                'msg' => "Ocurrio un error al seleccionar los datos: {$e}",
            ];
        }
    }

    /**
     * Insert data
     * @param type $table Nombre de la table a donde se van inserta los datos
     * @param type $data array asociativo en donde se van a insertar los datos
     *
     * $data = [ 'name' => 'Angel'];
     *
     * Por ejemplo: DB->update('users', $data)
     */
    public function insert($table, $data) {

        ksort($data);
        $fieldNames = implode(',', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $stm = $this->prepare("INSERT INTO {$table}({$fieldNames})VALUES({$fieldValues})");
        foreach ($data as $key => $value) {
            $stm->bindValue(":$key", $value);
        }
        /**
         * Estos mensajes pueden ser renombrados
         */
        if ($stm->execute()) {
            return [
                'error' => 'success',
                'msg' => "Registro realizado correctamente!",
                'notification' => "Buen trabajo!"
            ];
        } else {
            return [
                'error' => 'warning',
                'msg' => "Un error al insertar los datos.",
                'notification' => "Problema!"
            ];
        }
    }

    /**
     * Esta metodo se utiliza para actualizar datos
     *
     * @param string $table Nombre de la table donde se inserto la informacion
     * @param string $data un array asociativo con los mismos nombre de la table
     * @param string La condicion que vas utlizar.
     *
     * Por Ejemplo:
     * $data = [
     *  'name' => 'Pedro'
     * ];
     *
     * DB->update('users',$data, "id=$id" );
     */
    public function update($table, $data, $where) {

        try {
            ksort($data);

            $fieldDetails = NULL;
            foreach ($data as $key => $value) {
                $fieldDetails .= "$key=:$key,";
            }

            $fieldDetails = rtrim($fieldDetails, ',');

            $stm = $this->prepare("UPDATE {$table} SET {$fieldDetails} WHERE {$where}");

            foreach ($data as $key => $value) {
                $stm->bindValue(":$key", $value);
            }
            if ($stm->execute()) {
                return [
                    'error' => 'success',
                    'msg' => "Se actualizo correctamente",
                    'notification' => "Buen trabajo"
                ];
            } else {
                return [
                    'error' => 'warning',
                    'msg' => "No se pudo realizar el cambio",
                    'notification' => " "
                ];
            }
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Delete data
     * @param String $table Nombre de la tabla
     * @param String Codicion
     * @param Integer $limit limite por defecto es 1
     * @return array
     *
     * Por ejemplo:
     * DB->delete('users', 'id=1');
     *
     */
    public function delete($table, $where, $limit = 1) {

        if (!$this->exec("DELETE FROM {$table} WHERE {$where} LIMIT {$limit}")) {
            return [
                'error' => 'danger',
                'msg' => "Error al eliminar"
            ];
        }
    }

}
