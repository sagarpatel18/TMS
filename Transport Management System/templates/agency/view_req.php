<?php
include("header.php");
include("../db.php");
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
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Height</th>
                                                <th scope="col">Width</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Pickup Address</th>
                                                <th scope="col">Delivery Address</th>
                                                <th scope="col">Full Address</th>
                                                <th scope="col">Mode of Transport</th>
                                                <th scope="col">Price</th>
                                              </tr>
                                            </thead>





                                            <tbody>


<?php

$qry = "select * from cus_package_req where status = 'Request Price';";
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
                                                <td><?php echo $req1["cus_fname"]." ".$req1["cus_lname"];?></td>
                                                <td><?php echo $req["pack_height"];?></td>
                                                <td><?php echo $req["pack_width"];?></td>
                                                <td><?php echo $req["pack_weight"]." ".$req["unit"];?></td>
                                                <td><?php echo $req["pickup_address"];?></td>
                                                <td><?php echo $req["delivery_address"];?></td>
                                                <td><?php echo $req["f_address"];?></td>
                                                <td><?php echo $req["mode_of_tras"];?></td>
                                                <td>
                                                	<form method="post">
                                                		<input type="text" name="pr" style="width: 60%;border-radius: 100%"  autocomplete="off">
                                                		<input type="hidden" name="id" value="<?php echo $req["cus_pack_req_id"];?>">
                                                		<button name="btn" style="border-radius: 100%;"><i class="fas fa-check"></i></button>
                                                	</form>
                                                	
                                                </td>
                                                
                                            </tr>
<?php
$num = $num + 1;
}
?>


<?php

if (isset($_POST["btn"]))
{
	$id = $_POST["id"];
	$pr = $_POST["pr"];
	$ac = "remain";
	$st = "Waiting";

	$qry2 = "UPDATE cus_package_req SET price = '$pr',accept = '$ac', status = '$st' where cus_pack_req_id = '$id';";

	$fire2=$conn->query($qry2);
	
	echo "<script>window.location='view_req.php';</script>";


}

?>


                                              
                                            </tbody>




                                          </table>
                                          </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>










<?php
include("footer.php");
?>