<?php

include 'Form.php';

session_start();

var_dump( $_SESSION['userObject'] );

if( !empty($_SESSION['userObject']) ){
    header("Location: https://itmee-rurkss.c9.io/cabinet.php");
}



$arrErrors = array();

if( !empty($_POST) ){
    $objForm = new Form($_POST);
    $objForm->validate();
    if( $objForm->hasErrors() ){
        $arrErrors = $objForm->getErrors();
    }else{
        $_SESSION["userObject"] = $objForm->createUser(); 
    }
}

?>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>

<body>
    
    <div style="width:300px; margin:0 auto;">
      
    
      <?php
      
        if( !empty($arrErrors) ){
          ?>
          <div class="error" style="color:red">
          <?php
          
            foreach( $arrErrors as $strMessage ){
              ?>
              <p>
                <?php
                echo $strMessage;
                ?>
              </p>
              <?php
            }
          ?>
          </div>
          <?php } ?>
    
          
      <form role="form" method="POST" action="/signup.php">
          <div class="form-group">
            <label for="login">Login*</label>
            <input type="text" class="form-control" name="login" required placeholder="Login">
          </div>
          <div class="form-group">
            <label for="password">Password*</label>
            <input type="password" data-minlength="6" class="form-control" name="password" required  placeholder="Password">
          </div>
          <div class="form-group">
            <label for="first_name">Name*</label>
            <input type="text" class="form-control" name="first_name" required placeholder="Name">
          </div>
          <div class="form-group">
            <label for="lastname">Last Name*</label>
            <input type="text" class="form-control" name="last_name" required placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="tel">Phone</label>
            <input type="tel" class="form-control" name="phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" name="dob" placeholder="DOB">
          </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
      
  </body>