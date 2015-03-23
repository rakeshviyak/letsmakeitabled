<?php include_once("base_top.html"); ?>
<div class="container" >
<div id="content">
  <div class="col-md-6"> <img src="images/travelassist.jpg" alt="banner" />
  </div>
  <div class="col-md-6">
  		<h3>Flight Experience</h3>
      <div class="row form-group">
        <label for="year" class="control-label input-group">Rent a wheel chair</label>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary">
                <input type="radio" name="year" value="yes">Yes
            </label>
            <label class="btn btn-primary active">
                <input type="radio" name="year" value="no">No
            </label>
        </div>
      </div>
	    <div class="form-group">
	      <label for="exampleInputName2">Seating Arrangement</label>
	      <input type="text" class="form-control" id="exampleInputName2" placeholder="Near the toilet">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputName2">Special Food Requirements</label>
	      <input type="text" class="form-control" id="exampleInputName2" placeholder="Gluten free">
	    </div>
    	<div class="form-group">
	      <label for="exampleInputName2">Special Requirements/ Devices</label>
	      <input type="text" class="form-control" id="exampleInputName2" placeholder="Oxygen Mask">
	    </div>  
      <div style="padding-top:10px;">
        <button class="btn btn-default col-xs-4 col-sm-4 col-sm-offset-4">
          <a href="offflight.php" style="color:inherit;">Next <i class="fa fa-arrow-right"></i></a>
        </button>
      </div>
  </div>
</div>
</div>


<?php include_once("base_bottom.html"); ?>