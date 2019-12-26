<?php
$con=mysqli_connect('localhost','root','','Login');
if(!$con){
    echo 'error';
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$age=$_POST['age'];

$query="insert into admin(Fname,Lname,UserName,Password,Email,age) 
values('$fname','$lname','$uname','$pass','$email','$age')";

if($con->query($query)){
    echo 'data inserted';
}else{
    echo 'data not inserted';
}
mysqli_close($con);
?>
