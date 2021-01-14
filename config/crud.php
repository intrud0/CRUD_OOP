<?php
  include_once('config.php');

  Class Crud extends Database{

    public function __construct(){
      parent::__construct();
    }

    public function create($fname, $lname, $email, $timestamp){
      $fname = $this->_connect->real_escape_string($fname);
      $lname = $this->_connect->real_escape_string($lname);
      $email = $this->_connect->real_escape_string($email);
      $timestamp = $this->_connect->real_escape_string($timestamp);
      $sql = $this->_connect->query("INSERT INTO `info` (`first_name`,`last_name`, `email`, `create_time`) VALUES ('$fname', '$lname', '$email','$timestamp')");

      if (!$sql) {
        throw new \Exception("Error Executing MySQL query: " . $this->_connect->error);
      }
      return true;
    }

    public function update($fname, $lname, $email, $timestamp, $user_id){

    }

  }
 ?>
