<?php


function toinr($curr)
{
	if(strcmp($curr,"INR")==0)
	{
		$conv=1;
	}
	else if(strcmp($curr,"USD")==0)
	{
		$conv=80.50;
	}
	else if(strcmp($curr,"AUD")==0)
	{
		$conv=53.98;
	}
	else if(strcmp($curr,"GBP")==0)
	{
		$conv=95.30;
	}
	else
	{
		$conv=83.41;
	}
	return $conv;
}
function tocur($curr)
{
	if(strcmp($curr,"INR")==0)
	{
		$conv=1;
	}
	else if(strcmp($curr,"USD")==0)
	{
		$conv=0.012;
	}
	else if(strcmp($curr,"AUD")==0)
	{
		$conv=0.019;
	}
	else if(strcmp($curr,"GBP")==0)
	{
		$conv=0.010;
	}
	else
	{
		$conv=0.012;
	}
	return $conv;
}
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
$cv=toinr($fr_curr);
$cv=$cv*tocur($to_curr);
$amt=$amt*$cv;
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
