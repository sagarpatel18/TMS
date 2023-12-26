<?php
  include("header.php");
  include("../db.php");
  $id = $_GET["id"];
?>

        <div class="main-wrapper">
                  
                
              
          <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        










                      <h5 class="card-title"></h5>
                       
                        <table class="table table-hover">
                          <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Location</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date Time</th>
                        </tr>
                      </thead>
                      <tbody>

<?php
  $i = 1;
  $qry = "select * from pickup_delivery where cus_pack_req_id = '$id';";
  $fire=$conn->query($qry);
  while($req = $fire->fetch_assoc())
  {
?>

                        <tr>
                          <th scope="row"><?php echo $i;?></th>
                          <td><?php echo $req["where_rch"];?></td>
                          <td><?php echo $req["delivery_status"];?></td>
                          <td><?php echo $req["date"]." ".$req["time"];?></td>
                        </tr>
  
<?php
$i=$i+1;
}
?>
                      
                      </tbody>
                    
                      </table>










                    </div>
                </div>
            </div>
        </div>
      
      </div>

<?php
  include("footer.php");
?>