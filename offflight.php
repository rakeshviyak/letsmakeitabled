<?php include_once("base_top.html"); ?>
<div class="container">
<div id="content">
  <div class="col-md-6"> <img src="images/bingo1.jpg" alt="banner" />
  </div>
  <div class="col-md-6">
		<h3>Off-flight Experience</h3>
	  <div class="form-group">
	  	<p style="font-weight:bold;">Entertainment</p>
	  	<p>Choose an lounge&nbsp;&nbsp; <select name="Adults">
        <option value="0">None</option>

        <option value="1">Emirates First class Lounge (+$200)</option>
        <option value="2">Emirates Business class Lounge(+$50)</option>
        </select></p>
	  	<p>Add a movie (+$10)&nbsp;&nbsp;<input type="checkbox"></p>
	  	<p>Add a PS4 gaming station(+$10)&nbsp;&nbsp;<input type="checkbox"></p>
	  </div>
    <div class="form-group"style="margin-top: 20px;">
	    <span style="font-weight: bold;">Choose an Assist&nbsp;&nbsp; </span><select name="Adults">
    	<option value="0">None</option>
	    <option value="1">Airport excorts (+$200)</option>
	    <option value="2">Travel Nurse </option>
	    </select>
    </div>
		<div style="padding-top:15px;">
      <button class="btn btn-default col-xs-4 col-sm-4 col-sm-offset-4">
        <a href="preflight.php" style="color:inherit;">Next <i class="fa fa-arrow-right"></i></a>
      </button>
    </div>
  </div>
</div>
</div>


<?php include_once("base_bottom.html"); ?>