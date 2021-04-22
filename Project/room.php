<?php
session_start();
$con = mysqli_connect("localhost","root","","project");

    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $post = $_POST['post'];
        $arrival = date('Y-m-d',strtotime($_POST['arrival']));
        $depature = date('Y-m-d',strtotime($_POST['dept']));
        $adults = $_POST['adults'];
        $children = $_POST['children'];
        //$times = date('H:iA',strtotime($_POST['tim']));
        $bedding = $_POST['bedding'];
        $others = $_POST['others'];

        $querry = "INSERT INTO `room`(`fname`, `lname`,`e-mail`, `mobile`, `address`, `pincode`, `arrival`, `departure`, `adults`, `child`, `bedding`, `needs`) 
                    VALUES ('$fname','$lname','$email','$mobile','$address','$post','$arrival','$depature','$adults','$children','$bedding','$others')";
        $result = mysqli_query($con,$querry);
        if($result){
            header('Location: roombooking.php');
        }
        else{
            echo "Failed";
        }
    }
?>