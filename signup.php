<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="logo"><img src="icons/logo.png" alt="" width="250"></div>
        <div class="title">
            <h1 align="center">Sign Up Form<h1> 
        </div>
     
        <div class="wrapper" align="left">
            <form action="#"method="POST">
                <label for="">&nbsp;&nbsp;&nbsp;Enter full name:</label><br>
                <input type="text" name="Fullname" required> <br>
                <label for="">&nbsp;&nbsp;&nbsp;Enter mobile number:</label><br>
                <input type="tel" name="Telephone" pattern="[0][7][2389][0-9]{7}"><br>
                <label for="">&nbsp;&nbsp;&nbsp;Enter your email:</label><br>
                <input type="email" name="Email" required><br>
                <label for="">&nbsp;&nbsp;&nbsp;Enter your address:</label><br>
                <input type="text" name="Address" required><br>
                <label for="">&nbsp;&nbsp;&nbsp;Enter password:</label><br>
                <input type="password" name="Passwords" required><br><br>
                <input type="submit"id="submit" name="submit" value="Register Now">



            </form>
        </div>
        <div class="footer">
        <h6 class="copy" align="center">&copy; 2022 &nbsp;&nbsp;
       
       Built with &#10084; by Ranny</h6>
        </div>
    </div>
</body>
</html>
<?php
include_once('database.php');
if(isset($_POST['submit'])){
   
    $a=$_POST['Fullname'];
    $b=$_POST['Telephone'];
    $c=$_POST['Email'];
    $d=$_POST['Address'];
    $e=$_POST['Passwords'];
   
    
    $z="insert into readers(Fullname,Email,Telephone,Address,Passwords)values('$a','$c','$b','$d','$e')";
    $conn->exec($z);
    $records =$conn->prepare('SELECT *  FROM readers WHERE Readers_id = (SELECT MAX(Readers_id) FROM readers) '); // fetch data from database
    $records->execute();
    $data=$records->fetchAll();
    foreach($data as $row):
        $idd=$row['Readers_id'];
       $usertype="reader";
$q="insert into users(Personal_id,Fullname,Email,Passwords,User_type) values('$idd','$a','$c','$e','$usertype')";
$conn->exec($q);

    endforeach;
    }?>
<script>
document.getElementByType("input").onclick= function(){
style.input
};
document. getElementById("submit"). onclick = function () {
location. href = "index.php";
};

</script>