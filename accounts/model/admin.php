<?php

if(isset($_POST['user'])){
    $email = $_POST['user'];
    $wallet = $_POST['wallet'];
    $package = $_POST['package'];
    // $email = $_POST['user'];

    if(mysqli_query($db,"update users set wallet='$wallet', package='$package' where email='$email'")){
        $result= array(
            'action'=>array('toast'),
            'msg' => 'update successful',
            'blob'=>array('toast'=>'green')
        );
    } else {
        $result= array(
            'action'=>array('toast'),
            'msg' => 'update failed',
            'blob'=>array('toast'=>'red')
        );
    }
}

if(isset($_POST['ref'])){
    $ref=$_POST['ref'];
    if(mysqli_query($db,"update trans set status='1' where ref='$ref'")){
        $result= array(
            'action'=>array('toast'),
            'msg' => 'update successful',
            'blob'=>array('toast'=>'green')
        );
    } else {
        $result= array(
            'action'=>array('toast'),
            'msg' => 'update failed',
            'blob'=>array('toast'=>'red')
        );
    }
}

if(isset($_POST['admin'])){
    if($_POST['admin']==='taxmaster' && $_POST['pass']=='bitmonster'){
        $result= array(
            'action'=>array('alert','login'),
            'msg' => 'welcome back boss',
            'blob'=>array('alert'=>'success')

        );
        $_SESSION['admin']='true';
    } else {
        $result= array(
            'action'=>array('alert'),
            'msg' => 'invalid identity',
            'blob'=>array('alert'=>'error')
        );
    }
}

if(isset($_POST['btc'])){
    $btc=$_POST['btc'];
    $file=fopen('btc.php',"w");
    fwrite($file,'<?php $btc="'.$btc.'"; ');
    fclose($file);
    $result= array(
        'action'=>array('alert'),
        'msg' => 'your btc address has been updated succesfully',
        'blob'=>array('alert'=>'success')
    );
}