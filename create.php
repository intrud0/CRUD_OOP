<?php
  include_once ('config/crud.php');

  $crud = new Crud();
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $timestamp = date("Y-m-d H:i:s");

  if(empty($fname) || empty($lname) || empty($email)){
    $form_data['success'] = false;
    $form_data['message'] = "All fields are required.";
  } else {
    try {
      $create = $crud->create($fname,$lname,$email,$timestamp);
      $form_data['success'] = true;
      $form_data['message'] = "Information saved.";
    } catch (\Exception $e) {
      $form_data['success'] = false;
      $form_data['message'] = $e->getMessage();
    }

  }

    echo json_encode($form_data);
 ?>
