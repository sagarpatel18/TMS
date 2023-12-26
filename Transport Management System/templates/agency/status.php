<?php
include("header.php");
include("../db.php");
?>





<?php
if (isset($_POST["add"])) {
	$id = $_POST["id"];
	$loc = $_POST["location"];
	$st = $_POST["status"];
	$d = date("Y-m-d");
	$t = date("h:i:sa");

	// echo $id.$loc.$st;
$qry123 = "INSERT INTO pickup_delivery(cus_pack_req_id, where_rch, delivery_status, date, time) VALUES ('$id','$loc','$st','$d','$t')";
// echo $qry;
$fire123=$conn->query($qry123);

$qry1234 = "UPDATE cus_package_req SET status = '$st' where cus_pack_req_id = '$id';";
$fire1234 = $conn->query($qry1234);

echo "<script>window.location='status.php';</script>";

}

?>




                <div class="main-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    
                                  
                                    <div class="row">
                                      <div class="table-responsive">
                                        <table class="table invoice-table">





                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">View</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Height</th>
                                                <th scope="col">Width</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Pickup Address</th>
                                                <th scope="col">Delivery Address</th>
                                                <th scope="col">Full Address</th>
                                                <th scope="col">Mode of Transport</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>





                                            <tbody>


<?php

$qry = "select * from cus_package_req where accept = 'yes';";
$fire=$conn->query($qry);
$num = 1;
while($req = $fire->fetch_assoc())
{
	$id_d = $req['cus_id'];
	$qry1 = "select * from customer where cus_id='$id_d';";
	$fire1=$conn->query($qry1);
	$req1 = $fire1->fetch_assoc();


?>
                                              <tr>
                                                
                                                <td><?php echo $num;?></td>
                                                <td><a href="view_product.php?id=<?php echo $req['cus_pack_req_id'];?>"><i data-feather="eye"></i></a></td>
                                                <td><?php echo $req1["cus_fname"]." ".$req1["cus_lname"];?></td>
                                                <td><?php echo $req["cus_pack_req_id"];?></td>
                                                <td><?php echo $req["pack_height"];?></td>
                                                <td><?php echo $req["pack_width"];?></td>
                                                <td><?php echo $req["pack_weight"]." ".$req["unit"];?></td>
                                                <td><?php echo $req["pickup_address"];?></td>
                                                <td><?php echo $req["delivery_address"];?></td>
                                                <td><?php echo $req["f_address"];?></td>
                                                <td><?php echo $req["mode_of_tras"];?></td>
                                                <td><?php echo $req["status"];?></td>
                                                <td>
                                                <!-- <a href="status_update.php?id=<?php //echo $req['cus_pack_req_id'];?>"><i class="fas fa-pen"></i></a> -->
<button type="button" style="border-radius: 100px" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
	<i class="fas fa-pen"></i>
</button>


<div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>



      <form method="post">
      <div class="modal-body">

        <select name="id">
<?php
$qry12 = "select * from cus_package_req where accept = 'yes';";
$fire12=$conn->query($qry12);
while($req12 = $fire12->fetch_assoc())
{
?>
        	<option value="<?php echo $req12['cus_pack_req_id'];?>"><?php echo $req12['cus_pack_req_id'];?></option>
<?php
}
?>
        </select>


        <input type="text" name="location" placeholder="Enter Location of Packege">
        <input type="text" name="status" placeholder="Enter Status of this Packege">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" name="add">Add</button>
        <!-- <input type="submit" name="add" value="Add"> -->
      </div>
      </form>

    </div>
  </div>
</div>



                                                </td>
                                                
                                            </tr>
<?php
$num = $num + 1;
}
?>









<?php
include("footer.php");
?>