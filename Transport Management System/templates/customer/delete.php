<?php
include("../db.php");
$id = $_GET["id"];


$qry = "DELETE FROM cus_package_req where cus_pack_req_id = '$id';";
// echo $qry;
$fire=$conn->query($qry);


$qry1 = "DELETE FROM pickup_delivery where cus_pack_req_id = '$id';";
// echo $qry;
$fire1=$conn->query($qry1);

echo "<script>window.location='your_shipments.php';</script>";


?>