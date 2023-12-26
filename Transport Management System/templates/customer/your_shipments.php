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
                                                <th scope="col">Height</th>
                                                <th scope="col">Width</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Unit</th>
                                                <th scope="col">Pickup Address</th>
                                                <th scope="col">Delivery Address</th>
                                                <th scope="col">Full Address</th>
                                                <th scope="col">Mode of Transport</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Cancle</th>
                                              </tr>
                                            </thead>





                                            <tbody>



<?php
    $cus_id = $_SESSION['id'];
    $qry = "select * from cus_package_req where cus_id = '$cus_id';";
    $fire=$conn->query($qry);
    while($req = $fire->fetch_assoc())
    {


?>
                                              <tr>
                                                
                                                <td><?php echo $req["pack_height"];?></td>
                                                <td><?php echo $req["pack_width"];?></td>
                                                <td><?php echo $req["pack_weight"];?></td>
                                                <td><?php echo $req["unit"];?></td>
                                                <td><?php echo $req["pickup_address"];?></td>
                                                <td><?php echo $req["delivery_address"];?></td>
                                                <td><?php echo $req["f_address"];?></td>
                                                <td><?php echo $req["mode_of_tras"];?></td>
                                                <td><span class="badge bg-primary"><?php echo $req["status"];?></span></td>
                                                <td><?php echo $req["price"];?></td>
                                                
                                                <td>
<?php
// echo $req["accept"];
  if ($req["accept"] == "")
  {

  }
  elseif ($req["accept"] == "remain")
  {
    // echo "hi";
?>
    <a href="change.php?id=n&i=<?php echo $req['cus_pack_req_id']?>"><i class="far fa-window-close"></i></a>
    <a href="change.php?id=y&i=<?php echo $req['cus_pack_req_id']?>"><i class="fas fa-check"></i></a>
<?php
  }
  elseif ($req["accept"] == "yes")
  {
?>
    <a href="shipment.php?id=<?php echo $req['cus_pack_req_id'];?>"><i data-feather="eye"></i></a>
<?php
  }
  elseif ($req["accept"] == "no")
  {
    echo "canceled";
  }
  else
  {
    
  }
?>

                                                  <!-- <a href="shipment.php"><i class="far fa-window-close"></i></a> -->
                                                  <!-- <a href="shipment.php"><i data-feather="eye"></i></a> -->
                                                  <!-- <a href="shipment.php"><i class="fas fa-check"></i></a> -->
                                                </td>
                                                <td><a href="delete.php?id=<?php echo $req['cus_pack_req_id']?>"><i class="fas fa-trash-alt"></i></a></td>

                                              </tr>
<?php
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