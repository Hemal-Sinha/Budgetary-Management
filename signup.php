<?php
// echo("HELLO!");
include('db.php');
$user = $_POST['uname'];
$email = $_POST['email'];
$pass = base64_encode($_POST['password']);
$conf = base64_encode($_POST['confirm']);
$query1 = "SELECT * from details where User_name='$user';";
$query2 = "SELECT * from details where Email='$email';";
if(mysqli_num_rows(mysqli_query($connect,$query1))!==0)
{
    $msg = "User Already Present!";
}
else if(mysqli_num_rows(mysqli_query($connect,$query2))!==0)
{
    $msg = "Email already registered!";
}
else if(strcmp($pass,$conf) !==0)
{
    $msg = "Password Mismatch!";
}
else 
{
    $query_f="INSERT INTO details(User_name,Email,Pass) VALUES ('".$user."','".$email."','".$pass."');";
    mysqli_query($connect,$query_f);
    $msg = "Registered Successfully!";
    $query="INSERT INTO budgets(Pass,No_budgets) VALUES ('".$user."',0);";
    mysqli_query($connect,$query);
    $query = "CREATE TABLE ".$user."(bname VARCHAR(225),rem int,curr VARCHAR(225));";
    mysqli_query($connect,$query);
    mysqli_close($connect);
}
header('Location: first.php?msg='.$msg);
?>