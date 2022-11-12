<?php
include('db.php');
session_start();
$bname = $_SESSION['User']."_".$_POST['bname'];
$currency = $_POST['currency'];
$query = "SELECT * FROM ".$_SESSION['User']." WHERE bname='".$bname."';";
if(mysqli_num_rows(mysqli_query($connect,$query))>0)
{
    $msg="You have already created a budget with same name";
}
else
{
    $query = "CREATE TABLE ".$bname."(type VARCHAR(225),amt int,rmk VARCHAR(225));";
    mysqli_query($connect,$query);
    $query = "INSERT INTO ".$_SESSION['User']."(bname,rem,curr) VALUES('".$bname."',0,'".$currency."');";
    mysqli_query($connect,$query);
    $query = "SELECT * FROM budgets where Pass='".$_SESSION['User']."';";
    $prev =  mysqli_fetch_array(mysqli_query($connect,$query))[1];
    $prev = $prev+1;
    $query = "UPDATE budgets SET No_budgets=".$prev." WHERE Pass='".$_SESSION['User']."';";
    mysqli_query($connect,$query);
    $msg="Created Successfully";
}
header("Location: budget.php?f1=".base64_encode($_POST['bname'])."&f2=".base64_encode(0));
?>