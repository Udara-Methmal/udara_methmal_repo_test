<?php
date_default_timezone_set('Asia/Colombo');
include "../module/db_connect.php";
$username=$_POST["usrrname"];
$email=$_POST["emailGet"];
$password=$_POST["passwordGet"];
$md5Pass=md5($password);
$curDate=date("Y/m/d");
$curTime=date("h:i:s a");
echo $curTime;
// $insertData="INSERT INTO insert_test (username,user_email,user_password) VALUES ('$username','$email','$md5Pass')";
// $doQueryInsert=mysqli_query($myconnect,$insertData) or die(mysqli_error($myconnect));
// if($doQueryInsert){
//     echo "success!!!";
// }else{
//     echo "failed";
// }

?>