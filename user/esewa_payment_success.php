<?php 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php');
    require_once('../Includes/user.php');

    $uid = $_SESSION['uid'];

//UPDATE BILL
//UPDATE TRANSACTION

mysqli_query($con,"UPDATE `bill` SET `status` = 'SUCCESS' WHERE `bill`.`uid` = '$uid' and `bill`.`status`='PENDING';");
     
       
    header("Location:bill.php");
?>