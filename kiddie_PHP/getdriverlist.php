<?php
include_once("common.php"); 

$q="Select * from tblDriver where 1=1 ";


if(isset($_REQUEST["mob"]))
{
$q.=" and strMobileNo ='".$_REQUEST["mob"]."'";
}


if(isset($_REQUEST["lic"]))
{
$q.=" and strLicenceNo ='".$_REQUEST["lic"]."'";
}

$qr=mysqli_query($con,$q) or die(mysqli_error($con));
$row = array();
while($res=mysqli_fetch_assoc($qr))
{
$row[]=$res;
}

print(json_encode($row));
?>