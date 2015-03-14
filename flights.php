<?php include_once("base_top.html"); ?>

  <div class="container" style="margin-top: 80px;">
  	<div class="row">
  		<div class="col-xs-5"> 10 results</div>
  	    <div type="submit" class="btn btn-default col-xs-3" style="margin-right:10px;" data-toggle="modal" data-target="#myModal">Filter</div>
		<div class="dropdown ">
		  <button class="btn btn-default col-xs-3 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		    Sort
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Recommended</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Cheapest</a></li>
		  </ul>
		</div>
	</div>

	<div class="container" style="background:rgb(242, 242, 242);margin-top: 15px;">
	    <div class="row" style="padding:15px;">
	        <div class="col-sm-6 portfolio-item e-education">
	            
	                <div class ="row">
	                	
	                		<div class="row">
	                		<div class="col-xs-2"><img src="images/EmiratesFlightLogo.png" class="img-responsive" alt="" style="height:inherit;"></div>
	                        <div class="col-xs-10" style="font-weight: bold;padding-left:0px;">Emirates</div>
	                        </div>
	                        <div class="f-detail">10:10 SIN &nbsp;&nbsp;<i class="fa fa-paper-plane"></i>&nbsp; 13:25 DBX<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;5h 10m</span></div>
	                        <div class="f-detail">15:00 DBX &nbsp;&nbsp;<i class="fa fa-paper-plane"></i>&nbsp;&nbsp; 13:25 JFK<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;5h 10m</span></div>
	                        <div class="col-xs-8" style="padding-left:0px;">
	                        	<div>1 Transit<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;5h 10m</span></div>
	                        	<div font-weight:bold;><i class="fa fa-wheelchair"></i>&nbsp;wheelchair friendly</span></div>
	                        </div>
	                        <div type="submit" class="btn btn-default col-xs-3" style="margin-top:7px;" data-toggle="modal" data-target="#myModal">$2000</div>	                    </div>
	                </div>  
	        </div>
		</div>
	</div>
  </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Filter Criteria</h4>
      </div>
      <div class="modal-body">
        <div class="form-group" style="font-weight:bold;">Wheelchair accessible toilet</div>
        <div class="btn-group" role="group" style="padding-left:40px;">
  			<button type="button" class="btn btn-default" autofocus="true">Yes</button>
  			<button type="button" class="btn btn-default">No</button>
		</div>
	    <div class="form-group">
	      <label for="exampleInputName2">Max flight duration (hrs)</label>
	      <input type="text" class="form-control" id="exampleInputName2" placeholder="10">
	    </div>
	    <div class="form-group">
	      <label for="exampleInputName2">Minimum layover time (hrs)</label>
	      <input type="text" class="form-control" id="exampleInputName2" placeholder="3">
	    </div>
      </div>
    </div>
  </div>
</div>


<?php include_once("base_bottom.html"); ?>