<?php
include 'Form.php';

session_start();

if( empty($_SESSION['userObject']) ){
    //header("https://itmee-rurkss.c9.io");
}

$arrErrors = array();

$objUser = $_SESSION['userObject'];

var_dump( $_FILES );

if( !empty($_FILES['img']) ){
    $objForm = new Form();
    if( !$objForm->upload( $_FILES['img'], $objUser->getID() ) ){
        $arrErrors = $objForm->getErrors();
    }else{
        //header("Refresh:0");
    }
}

?>

<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
    <title>Cabinet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>

<body>
    
    <div style="width:500px; margin: 0 auto;">
        <h2>
            Welcome back, <?php echo $objUser->getFirstName() . " " . $objUser->getLastName() ?>
        </h2>
        <?php
        foreach( $arrErrors as $strError ){
            ?>
            <div style="color: red;">
                <?php
                echo $strError;
                ?>
            </div>
            <?php
        }
        ?>
        <form method="POST" action="/cabinet.php">
        
            Select a file: <input type="file" name="img">
              <input type="submit">
        </form>
        
    </div>
</body>