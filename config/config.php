<?php

  Class Database{

    protected $_connect;
    private $_host = "127.0.0.1";
    private $_dbname = "crud";
    private $_username = "root";
    private $_password = "";

    public function __construct(){
      $this->_connect = new mysqli($this->_host, $this->_username, $this->_password, $this->_dbname);
      if ($this->_connect->error) {
        die("Unable to connect to database: " . $this->connect_error);
      }
    }

  }

 ?>
