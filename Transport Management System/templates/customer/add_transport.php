<?php
  include("header.php");
  include("../db.php");
?>



<?php

  if (isset($_POST["btn"]))
  {
      $from_c = $_POST["from_c"];
      $to_c = $_POST["to_c"];
      $height = $_POST["height"];
      $width = $_POST["width"];
      $weight = $_POST["weight"];
      $unit = $_POST["unit"];
      $mode = $_POST["mode"];
      $address = $_POST["address"];
      $pincode = $_POST["pincode"];
      $cus_id = $_SESSION["id"];
      $status = "Request Price";
      $date = date("Y-m-d");
      $time = date("h:i:sa");


      // echo $from_c."<br>";
      // echo $to_c."<br>";
      // echo $height."<br>";
      // echo $width."<br>";
      // echo $weight."<br>";
      // echo $unit."<br>";
      // echo $mode."<br>";
      // echo $address."<br>";
      // echo $pincode."<br>";

      $qry="INSERT INTO cus_package_req (cus_id, pack_height, pack_width, pack_weight, unit, pickup_address, delivery_address, f_address, mode_of_tras, status, cdate, ctime) VALUES ('$cus_id','$height','$width','$weight','$unit','$from_c','$to_c','$address','$mode','$status','$date','$time');";
      // echo $qry;
      $fire=$conn->query($qry);

  }

?>



                <div class="main-wrapper">
                    
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Shipment</h5>
           






<form method="post">



    <div class="row g-3">
      <div class="col-sm">
        <select class="form-select" id="autoSizingSelect" name="from_c" required="">
          <option selected><b>From city...</b></option>
          <option value="ahmedabad">Ahmedabad</option>
          <option value="surat">Surat</option>
          <option value="baroda">Baroda</option>
        </select>
      </div>
      <div class="col-sm">
        <select class="form-select" id="autoSizingSelect" name="to_c" required="">
          <option selected><b>To city...</b></option>
          <option value="ahmedabad">Ahmedabad</option>
          <option value="surat">Surat</option>
          <option value="baroda">Baroda</option>
        </select>
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
    </div>
    
    
    
    <div class="row mb-3"></div>
    
    
    
    <div class="row g-3">
      <div class="col-sm">
        <input type="text" class="form-control" name="height" required="" placeholder="Height (in CM)" aria-label="Height">
      </div>
      <div class="col-sm">
        <input type="text" class="form-control" name="width" required="" placeholder="Width (in CM)" aria-label="Width">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" aria-label="Weight">
      </div>
    </div>
    
    
    
    <div class="row mb-3"></div>
    
    
    
    
    <div class="row g-3">
      <div class="col-sm">
        <input type="text" class="form-control" name="weight" required="" placeholder="Weight" aria-label="Weight">
      </div>
      <div class="col-sm">
        <select class="form-select" id="autoSizingSelect" name="unit" required="">
          <option selected><b>Unit...</b></option>
          <option value="g">g</option>
          <option value="kg">kg</option>
        </select>
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
    </div>
    
    
    
    <div class="row mb-3"></div>
    
    
    
    <div class="row g-3">
      <div class="col-sm">
        <select class="form-select" id="autoSizingSelect" name="mode" required="">
          <option selected><b>Mode of Trasportion...</b></option>
          <option value="air">Air</option>
          <option value="rail">Rail</option>
          <option value="on_road">On Road</option>
          <option value="ship">Ship</option>
        </select>
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control" placeholder="Weight" aria-label="Weight">
      </div>
    </div>
    
    
    
    <div class="row mb-3"></div>
    
    
    <div class="row g-3">
      <div class="col-sm">
        <input type="text" class="form-control" name="address" required="" placeholder="Address" aria-label="Address">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
    </div>
    
    
    
    
    
    <div class="row mb-3"></div>
    
    
    
    <div class="row g-3">
      <div class="col-sm">
        <input type="text" class="form-control" name="pincode" required="" placeholder="Pincode" aria-label="Pincode">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
      <div class="col-sm">
        <input type="hidden" class="form-control">
      </div>
    </div>
    
    <div class="row mb-3"></div>


    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
      <label class="form-check-label" for="exampleCheck1">I agree the <a href="">Terms and Conditions</a></   label>
    </div>
    
    
    
    
    <button type="submit" name="btn" class="btn btn-secondary">Request Price</button>
    

</form>








              </div>
          </div>
      </div>
  </div>
                    
                    
                </div>
<?php
  include("footer.php");
?>