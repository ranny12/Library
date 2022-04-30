<?php
include_once('database.php');
session_start();
if(isset($_POST['submit'])){
$a=$_POST['Email'];
$b=$_POST['Passwords'];
$records =$conn->prepare("select * from users where (Email='$a'OR Personal_id='$a') AND Passwords='$b'"); // fetch data from database
$records->execute();
$data=$records->fetch(PDO::FETCH_ASSOC);
if($data>0 && $data['User_type']=='reader'){
    $_SESSION['id']=$data['User_id'];
    $_SESSION['Fullname']=$data['Fullname'];
    $_SESSION['email']=$data['Email'];
    
    echo"<script>window.location='user.php'</script>";
}
elseif($data>0 && $data['User_type']=='admin'){
    $_SESSION['id']=$data['Personal_id'];
    $_SESSION['fullname']=$data['Fullname'];
    $_SESSION['email']=$data['Email'];
   
    echo"<script>window.location='admin.php'</script>";
}

else{
    echo"<script>alert('Oops try again!')</script>";
    echo"<script>window.location='index.php'</script>";
}}
?>