<?php

// establishing the MySQLi connection

 

$con = mysqli_connect("localhost","root","",projetphp);

if (mysqli_connect_errno())

{

echo “MySQLi Connection was not established: ” . mysqli_connect_error();

}

// checking the user

if(isset($_POST[‘submit’])){

$login = mysqli_real_escape_string($con,$_POST[login]);

$mdp = mysqli_real_escape_string($con,$_POST[mdp]);

$sel_user = "select * from client where login='$login AND mdp='$mdp'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION[login]=$login;

echo “<script>window.open(‘contact.php’,’_self’)</script>”;

}

else {

echo “<script>alert(‘Email or password is not correct, try again!’)</script>”;

}

}

?>

 