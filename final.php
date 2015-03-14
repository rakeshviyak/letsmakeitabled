<?php include_once("base_top.html"); ?>
 
  <div class="container" style="margin-top:80px;margin-bottom:20px;">
 	
  	<h3>Booking Details</h3>

   <div class="form-group">
      <label for="exampleInputName2">Pasenger name</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Stephen Hawking">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">Passport no</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="104121156">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">Address</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Univerisity of Cambridge">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">Nationality</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="United Kingdom">
    </div>
    
    <h3>Payment Details</h3>

   <div class="form-group">
      <label for="exampleInputName2">Card No</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">CVV</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="">
    </div>
        
		<div type="button" class="btn btn-default col-xs-12" data-toggle="modal" data-target="#byeModal">Confirm Booking</div>

  </div>

<!-- Modal -->
<div class="modal fade" id="byeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">You did it <i class="fa fa-2x fa-smile-o"></i></h4>
      </div>
      <div class="modal-body">
        <div class="form-group" style="font-weight:bold;">Your flight is confirmed, meet you soon.</div>
          <div class="banner-container" style=";border-bottom: 0px;"> <img src="images/cabin.png" alt="banner" />
    </div>

      </div>
    </div>
  </div>
</div>
<?php include_once("base_bottom.html"); ?>