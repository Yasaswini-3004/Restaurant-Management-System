<?php
session_start();
date_default_timezone_get();
$con = mysqli_connect("localhost","root","","project");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $dates = date('Y-m-d',strtotime($_POST['dates']));
        $seat = $_POST['ans'];
        $times = date('H:iA',strtotime($_POST['tim']));
        $drop = $_POST['drop'];
        $mobile = $_POST['mobile'];

        $querry = "INSERT INTO `tablebooking`(`name`, `email`, `mobile`, `date`, `seat`, `time`, `cus_type`) VALUES ('$name','$mail','$mobile','$dates','$seat','$times','$drop')";
        $result = mysqli_query($con,$querry);
        if($result){
            header('Location: table.php');
        }
        else{
            echo "Failed";
        }
    }
?>