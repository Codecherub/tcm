
<?php
session_start();
$db = mysqli_connect('Localhost','ibpccert_tcm','Hnrtee11*','ibpccert_tcm');
// $db = mysqli_connect('localhost','root','','tcm');

function counter($item,$user){
    global $db;
   switch ($item) {
       case 'w':
           return mysqli_num_rows(mysqli_query($db,"select * from trans where user ='$user' and type='w'"));
           break;
       
       case 'd':
           return mysqli_num_rows(mysqli_query($db,"select * from trans where user ='$user' and type ='d'"));
           break;
       
       default:
           # code...
           break;
   }
}


$nameX = ['James Hrding','theo allegory','carrie crooner','man kim','rapali kesh','abu majeed','a. punsh','v. garteh','thomas gareth','vega moore','mark james','cory cubberman','abu rajesh','rajesh pooth','luthra kim','jones reiner','jim cook','martha henderkins','p. hendricks','shaman king','prath cook','kimberly john','chan cory','matt inburg','henry krasler','ruth drasner','link manders'];
$amtX=['5,700','3,500','1,800','150','1,560','735','855','35','100','17,500','1500','850','75','100','50,000','3,853','715','510','200','3,520','31,500','1,200'];
$timeX =[1,0.5,10,2,3,4,5,26,24,11,72,8,6,7,9,15,13];
$statX=['pending','processing','completed'];
$colX=['danger','warning','success'];