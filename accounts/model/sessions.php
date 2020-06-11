<?php require_once 'core.php';
if(isset($_SESSION['user'])){
    $g=mysqli_query($db,"select * from users where email ='".$_SESSION['user']."' ");
    $user =  mysqli_fetch_array($g);
}else{
    header("location:auth");
}
?>