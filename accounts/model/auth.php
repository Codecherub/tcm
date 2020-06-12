<?php 

// signup
if(isset($_POST['new_user'])){
    $new_user = $_POST['new_user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    //check if pass matches
    if($password != $cpassword){
        $result = array(
            'action'=>array('alert'),
            'msg' => 'your passwords do not match',
            'blob'=>array('alert'=>'warning')
        );
    }

    //check if email has been used{
    if(mysqli_num_rows(mysqli_query($db,"select * from users where email='$email'")) > 0 ){
        $result = array(
            'action'=>array('alert'),
            'msg' => 'this email has already been used.',
            'blob'=>array(
                'alert'=>'warning',
                'port'=>array('location'=>'auth','time'=>3000)
            )
        );    
    } else{
        if(mysqli_query($db,"insert into users(fullname,email,password,package) values('$new_user','$email','$password','basic')")){
            $result = array(
                'action'=>array('alert','port'),
                'msg' => 'hi '.$new_user.',  we sent an email to '.$email.' for id verification. pls check your email address to proceed. Thanks!  ',
                'blob'=>array(
                    'alert'=>'success')
            ); 
        }else {
            $result = array(
                'action'=>array('alert'),
                'msg' => 'sorry we were unable to complete your onboarding.',
                'blob'=>array(
                    'alert'=>'error'
                )
            );    
        }
    }
    
}


if(isset($_POST['auth'])){
    $email = $_POST['auth'];
    $password = $_POST['password'];
    if(mysqli_num_rows(mysqli_query($db,"select * from users where email='$email' and password='$password'"))===1){
        $G = mysqli_query($db,"select * from users where email='$email' and password='$password'");
        $get = mysqli_fetch_array($G);
        $result = array(
            'action'=>array('toast','port'),
            'msg' => 'welcome back '.$get['fullname'].'  ',
            'blob'=>array(
                'toast'=>'green',
                'port'=>array('location'=>'dashboard','time'=>3000)
                )
        ); 
        $_SESSION['user'] = $get['email'];
    }else {
        $result = array(
            'action'=>array('alert'),
            'msg' => 'invalid credentials ',
            'blob'=>array(
                'alert'=>'error'
                )
        ); 
    }
}