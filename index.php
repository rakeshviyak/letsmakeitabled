<?php 
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: origin, content-type, accept");

        exit(0);
    }
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT");
header("Access-Control-Allow-Headers: origin, content-type, accept");

include_once("base_top.html"); ?>

<div class="container" id="home" ng-app="index" ng-controller="IndexCtrl">
<div id="content">
    <h3 class="col-md-offset-3">Are you special, Lets make your travel awesome </h3>
  <div class="col-md-6"> <img src="images/banner.jpg" alt="banner" />
  </div>
  <div class="col-md-6">
    <form style="margin-top:15px;">
      <div class="btn-group  col-md-offset-2" role="group" aria-label="..." style="padding-left:75px;">
        <button type="button" class="btn btn-default btn-col-md-6" autofocus="true" id="roundtrip">Round-trip</button>
        <button type="button" class="btn btn-default btn-col-md-6" id="oneway">One-way </button>
      </div>
      <div class=""style="padding-left:20px;padding-right:20px;">
        <label for="exampleInputName2">From: {{fromCity.value}}</label>
        <select name="for" ng-model="fromCity"
                  ng-options="from as from.displayName for from in fromCities" class="col-xs-12">
        </select>

      </div>
      <div class=""style="padding-left:20px;padding-right:20px;">
        <label for="exampleInputName2">To: {{returnCity.value}}</label>
        <select name="return" ng-model="returnCity"
              ng-options="return as return.displayName for return in returnCities" class="col-xs-12">
          <!-- <option ng-repeat="return in returnCities" value="{{return.value}}">{{return.displayName}}</option> -->
        </select>
      </div>
      <div class=""style="padding-left:20px;padding-right:20px;">
        <label for="exampleInputName2">Depart</label>
        <input type="date" class="form-control" ng-model="departDate.value" placeholder="yyyy-MM-dd" >
        <!-- <input type="date" id="exampleInput" name="input" ng-model="example.value"
         placeholder="yyyy-MM-dd"/> {{example.value}} -->
      </div>
      <div class=" onewaytext"style="padding-left:20px;padding-right:20px;">
        <label for="exampleInputName2">Return</label>
        <input type="date" class="form-control" ng-model="returnDate.value" placeholder="yyyy-MM-dd" >
      </div>
      <div class=""style="padding-left:20px;padding-right:20px;">
        <span>Seniors</span>
        <select name="Seniors">
          <option ng-repeat="n in [1,2,3,4,5]" value="{{n}}">{{n}}</option>
        </select>
        <span>Children</span>
        <select name="Childer">
          <option ng-repeat="n in [1,2,3,4,5]" value="{{n}}">{{n}}</option>
        </select>
        <span>Adults</span>
        <select name="Adults">
          <option ng-repeat="n in [1,2,3,4,5]" value="{{n}}">{{n}}</option>
        </select>
      </div>
      <div class="" style="margin:20px 0px;padding-left:20px;padding-right:20px;"> 
          <button class="btn btn-block btn-primary"><a href="flights.php?from={{fromCity.value}}&return={{returnCity.value}}&depart={{departDate.value | date:'yyyy-MM-dd'}}" style="color:inherit;">Find Flights </a></button> 
      </div>  
    </form>
  </div>
</div>
</div>


<script type="text/javascript">
  var app = angular.module('index',[]);
  app.controller('IndexCtrl',['$scope',function($scope){
    $scope.fromCities = [
        {value: 'SIN', displayName: 'Singapore'},
        {value: 'JFK', displayName: 'New York'},
        {value: 'DBX', displayName: 'Dubai'},
        {value: 'LHR', displayName: 'London'}
     ]
    $scope.returnCities = [
        {value: 'JFK', displayName: 'New York'},
        {value: 'DBX', displayName: 'Dubai'},
        {value: 'LHR', displayName: 'London'},
        {value: 'SIN', displayName: 'Singapore'}
     ]
     $scope.fromCity = $scope.fromCities[0];
     $scope.returnCity = $scope.returnCities[0];

     var currentDate = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
     var day = currentDate.getDate()
     var month = currentDate.getMonth() 
     var year = currentDate.getFullYear()
     $scope.departDate = {
         value: new Date(year, month, day+2)
       };
     $scope.returnDate = {
         value: new Date(year, month, day+9)
       };
  }]);
</script>
<?php include_once("base_bottom.html"); ?>
