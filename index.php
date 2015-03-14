<?php include_once("base_top.html"); ?>

<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <!-- <h1 class="responsive-headline" style="font-size: 40px;">Are you special, Lets make your travel awesome <i class="fa fa-smile-o"></i></h1> -->
         <!-- <a href="#basics" class="arrow-link"> <i class="fa fa-chevron-down"></i> </a>  -->
        <!--<p>Awesome theme for your Business or Corporate site to showcase <br/>
          your product and service.</p>--> 
      </div>
      
      <!-- <a class="hero-button learn-more smoothscroll text-center" href="#features">Learn More</a>--> 
      <!-- <div class="hero-img"> <img src="images/homepage-1204-background-lapto.png" alt="" class="text-center animated fadeInUpBig"/></div>--> 
    </div>
  </div>
  <div class="container">
  <h3 class="col-md-offset-3">Are you special, Lets make your travel awesome </h3>
  <form class="">
  <div class="btn-group  col-md-offset-4 col-xs-offset-4" role="group" aria-label="..." style="padding-left:75px;">
    <button type="button" class="btn btn-default btn-col-md-6" autofocus="true">Round-trip</button>
    <button type="button" class="btn btn-default btn-col-md-6">One-way </button>
  </div>



    <div class="form-group">
      <label for="exampleInputName2">From</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Singapore">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">To</label>
      <input type="text" class="form-control" id="exampleInputName2" placeholder="Newyork">
    </div>
    <div class="form-group">
      <label for="exampleInputName2">Depart</label>
      <input type="Date" class="form-control" id="exampleInputName2" placeholder="Depart" >
    </div>
    <div class="form-group">
      <label for="exampleInputName2">Return</label>
      <input type="date" class="form-control" id="exampleInputName2" placeholder="Return">
    </div>
    <div style="margin-left:40px;margin-bottom: 20px;">
    <span>Seniors</span><select name="Seniors">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    <span>Chilren</span><select name="Childer">
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    <span>Adults</span><select name="Adults">
    <option value="0">0</option>

    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
    </div>
    <div type="submit" class="btn btn-default btn-block" style="margin-bottom: 30px;"><a href="flights.php" style="color:inherit;">Find Flights </div>

  </form>

  </div>
  
</section>


<?php include_once("base_bottom.html"); ?>
