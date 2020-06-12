<?php require_once "core.php";

if(isset($_POST['control'])){
    switch ($_POST['control']) {
        case 'auth':
            require_once 'auth.php';
            break;

        case 'transactions':
            require_once 'trans.php';
            break;

        case 'admin':
            require_once 'admin.php';
            break;
        
        default:
        $result = array(
            'action'=>array('toast'),
            'msg'=>'failed to get form control',
            'blob'=>array('toast'=>'toast')
        );
            break;
    }
}
else {
    $result = array(
        'action'=>array('alert'),
        'msg'=>'failed to get form control',
        'blob'=>array('alert'=>'error')
    );
}

echo json_encode($result);