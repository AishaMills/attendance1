

<?php 
//prevent users from typing in url to bypass login

if(!isset ($_SESSION['userid'])){
    header("Location: login.php");
}


?>