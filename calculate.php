<?php
// function currency_converter($from,$to,$amount)
// {
//  $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
 
//  $request = curl_init(); 
//  $timeOut = 0; 
//  curl_setopt ($request, CURLOPT_URL, $url); 
//  curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 
 
//  curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
//  curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
//  $response = curl_exec($request); 
//  curl_close($request); 
 
//  return $response;
// } 

include('db.php');
session_start();
$bname = $_GET['b'];
$query = "SELECT rem from ".$_SESSION['User']." where bname='".$_SESSION['User']."_".$bname."';";
$rem = mysqli_fetch_array(mysqli_query($connect,$query))[0];
$query = "SELECT curr from ".$_SESSION['User']." where bname='".$_SESSION['User']."_".$bname."';";
$to_curr = mysqli_fetch_array(mysqli_query($connect,$query))[0];
$amt=$_POST['amt'];
$rmk=$_POST['rmk'];
$fr_curr=$_POST['currency'];




// $rawData = currency_converter($fr_curr,$to_curr,$amt);
// $regex = '#\<span class=bld\>(.+?)\<\/span\>#s';
// preg_match($regex, $rawData, $converted);
// $amt = $converted[0];
// // echo $result;




if ($_POST['action'] == 'INCOME')
{
    $rem=$rem + $amt;
    $type='Income';
} 
else
{
    $rem=$rem - $amt;   
    $type='Expenditure';
}
echo $rem;
$query="UPDATE ".$_SESSION['User']." SET rem=".$rem." where bname='".$_SESSION['User']."_".$bname."';";
mysqli_query($connect,$query);
$query="INSERT INTO ".$_SESSION['User']."_".$bname."(type,amt,rmk) VALUES ('".$type."',".$amt.",'".$rmk."');";
mysqli_query($connect,$query);
header("Location: budget.php?f1=".base64_encode($bname)."&f2=".base64_encode($rem));
?>