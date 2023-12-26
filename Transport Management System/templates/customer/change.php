<?php
include("../db.php");
$id = $_GET["id"];
$i = $_GET["i"];


if ($id == "y")
{
	$a = "yes";
}
else
{
	$a = "no";
}

// echo $id;

$qry = "UPDATE cus_package_req SET accept = '$a', status = 'Wating for Pickup' where cus_pack_req_id = '$i';";
// echo $qry;
$fire=$conn->query($qry);

echo "<script>window.location='your_shipments.php';</script>";

?>