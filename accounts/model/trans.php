<?php
// for deposit

if(isset($_POST['deposit'])){
    $deposit = $_POST['deposit'];
    $btc = $_POST['btc'];
    $ref = $_POST['ref'];
    $wallet = $_POST['wallet'];
    $userX = $_SESSION['user'];
    $date = date('d M Y');

    if($deposit < 10){
        $result = array(
            'msg'=>'sorry you can only deposit a minimum of $10',
            'action'=>array('toast'),
            'blob'=>array('toast'=>'warning')
        );
    } 
    else{
    if(mysqli_query($db,"insert into trans(amt,btc,ref,user,date,type)
     values('$deposit','$btc','$ref','$userX','$date','d')")){
        $result = array(
            'action'=>array('alert','loader'),
            'msg'=>'your deposit request has been succesfully recieved,<br/>
             pls follow the instructions transfer '.$btc.' BTC to '.$wallet.' with the unique refe ID: '.$ref.'<br/> .
             once the tranaction has been confirmed by our realtime software, your wallet balance will be auomatically updated ',
             'blob'=>array('alert'=>'success','loader'=>'trans')
        );
    } else {
        $result = array(
            'action'=>array('alert'),
            'msg'=>'something went wrong, please try again',
             'blob'=>array('alert'=>'error')
        );
    }
    }
}

//withdrawal
if(isset($_POST['withdraw'])){
    $withdraw = $_POST['withdraw'];
    $btc = $_POST['btc'];
    $ref = "ref-".rand(100000,900000);
    $wallet = $_POST['wallet'];
    $userX = $_SESSION['user'];
    $date = date('d M Y');

    if($withdraw < 10){
        $result = array(
            'msg'=>'sorry you can only withdraw a minimum of $10',
            'action'=>array('toast'),
            'blob'=>array('toast'=>'warning')
        );
    } else {
    if(mysqli_query($db,"insert into trans(amt,btc,ref,user,date,type,wallet)
     values('$withdraw','$btc','$ref','$userX','$date','w','$wallet')")){
        $result = array(
            'action'=>array('alert','loader'),
            'msg'=>'your Withdrawal request has been recieved.<br>
             it typically takes less than 24hrs to complete this process <br/>
             ',
             'blob'=>array('alert'=>'success','loader'=>'trans')
        );
    } else {
        $result = array(
            'action'=>array('alert'),
            'msg'=>'something went wrong, please try again',
             'blob'=>array('alert'=>'error')
        );
    }
  }
}


//fetcher
if(isset($_POST['fetch'])){
    if($_POST['fetch'] === 'mytrans'){
        $g = mysqli_query($db,"select * from trans where user='".$_SESSION['user']."'");
        while($get= mysqli_fetch_array($g)){
            $data[] = $get;
        }

        $result = array(
            'data'=>$data
        );
    }
}

//profile update

if(isset($_POST['profile'])){
    $fullname = $_POST['profile'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $btc = $_POST['btc'];
    $user = $_SESSION['user'];
    if(mysqli_query($db,"update users set 
    fullname='$fullname',
    email='$email',
    phone='$phone',
    country='$country',
    address='$address',
    btc='$btc' where email='$user'
     ")){
        $result = array(
            'action'=>array('toast'),
            'msg'=>' your profile has been successfully updated',
            'blob'=>array('toast'=>'green')
        );
    }else{
        $result = array(
            'action'=>array('toast'),
            'msg'=>' unable to update profile',
            'blob'=>array('toast'=>'red')
        );
    }
}