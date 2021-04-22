<?php 
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['submitmsg'])){
$Name=$_POST['Name'];
$Emailid=$_POST['Emailid'];
$Contact=$_POST['Contact'];
$Message=$_POST['Message'];
if($con->connect_error){
        die("No connection");}
$result=$con->query("INSERT INTO `contact`(`Name`, `Emailid`,`Contact`, `Message`) VALUES ('$Name','$Emailid','$Contact','$Message')");
if($result ==TRUE){
   header('location:contact.php');
}else{
    echo "<script>";
    echo "var mydiv=document.getElementById('section');";
    echo "mydiv.innerHTML='<h2 style=\"color: green;\">Sorry, some thing went wrong while submitting your comment.<br><br><br><a id=\"back\" href=\"Home.php\">&larr;Back</a></h2>';";
    echo "</script>";
}
}
?>
