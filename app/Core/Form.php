<?php

namespace Core;

/**
 * Description of Form
 *  - Fill out a form
 *  - POST to data
 *  - Sanitize
 *  - validate
 *  - Return Data
 *  - Write to database
 *    
 * @author Angel De La Cruz
 */
class Form {

    /** @var array $_currentItem The imediately posted item */
    private $_currentItem = null;

    /** @var array $_postDta Stores the posted Data */
    private $_postData = array();

    /** @var object $_val The validator object */
    private $_val = array();

    /** @var array  $_error holds the current forms errors */
    private $_error = array();

    /**
     * __construct - Instantiates the validator class
     */
    public function __construct() {
        $this->_val = new Val();
    }

    /**
     * - post is to run $_POST
     *  
     * @param String $field - The HTML fielname to post
     */
    public function post($field) {
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }

    public function fetch($fieldName = false) {
        if ($fieldName) {
            if (isset($this->_postData[$fieldName])) {
                return $this->_postData[$fieldName];
            } else {
                return false;
            }
        } else {
            return $this->_postData;
        }
    }
        
    /**
     * 
     * @param type $typeOfValidator
     * @param type $arg
     * @return $this
     * @example val post('name')->val('minlength', 2) or post('age')->val('digit')
     */
    public function val($typeOfValidator, $arg = null) {

        if ($arg == null) {

            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
        } else {

            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);
        }

        if ($error) {
            $this->_error[$this->_currentItem] = $error;
            echo '<pre>';
            print_r($error);
            echo '</pre>';
        }

        return $this;
    }

    /**
     * submit - Handles the form and throws an exception upon error
     * @return boolean
     * @throws Exception
     */
    public function submit() {
        if (empty($this->_error)) {
            return true;
        } else {
            $e = implode(', ', $this->_error);
            throw new Exception($e);
        }
    }

}
