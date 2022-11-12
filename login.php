<?php
include('db.php');
$email = $_POST['email'];
$pass = base64_encode($_POST['password']);
$query1 = "SELECT * from details where Email='$email';";
if(mysqli_num_rows(mysqli_query($connect,$query1)) !== 0)
{
    if(strcmp($pass,mysqli_fetch_array(mysqli_query($connect,$query1))[2]) == 0) 
    {
        session_start();
        $msg = "Logged In Successfully";
        $_SESSION['User'] = mysqli_fetch_array(mysqli_query($connect,$query1))[0];
        $_SESSION['Pass'] = mysqli_fetch_array(mysqli_query($connect,$query1))[2];
        header('Location: home_page.php?msg='.$msg);
    }
    else
    {
        $msg = "Incorrect Password";
        header('Location: first.php?msg='.$msg);
    }
}
else
{
    $msg = "User not registered";
    header('Location: first.php?msg='.$msg);
}
?>