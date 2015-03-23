<?php include_once("base_top.html"); ?>
<div class="container">
<div id="content">
  <div class="col-md-6"> <img src="images/taxi.jpg" alt="banner" />
  </div>
  <div class="col-md-6">
 	
  	<h3>Pre flight Experience</h3>

	  <div class="form-group">
	  	<p style="font-weight:bold;">Book a taxi</p>
	  	<select name="Adults">
        <option value="0">Choose a taxi to and fro airport </option>

        <option value="1">Add a mercedes (+ $20*2)</option>
        <option value="2">Add a wheelchair friendly taxi (+ $40*2)</option>
        </select>
	  </div>
    <div class="form-group">
      <label for="exampleInputName2">Notify your loved ones</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Phone No/Email">
    </div>
    <div style="padding-top:15px;">
      <button class="btn btn-default col-xs-4 col-sm-4 col-sm-offset-4">
        <a href="final.php" style="color:inherit;">Next <i class="fa fa-arrow-right"></i></a>
      </button>
    </div>
  </div>
</div>
</div>

<?php include_once("base_bottom.html"); ?>