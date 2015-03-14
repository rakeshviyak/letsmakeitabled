<?php include_once("base_top.html"); ?>


   
<div ng-app="App">
    <div ng-controller="MainCtrl">
        <div class="container" style="margin-top: 80px;">

            <div class="row">
                <div class="col-xs-5" style="font-weight:bold;"> {{RecordsCount.length}} results</div>
                <div type="submit" class="btn btn-default col-xs-3" style="margin-right:10px;" data-toggle="modal" data-target="#myModal">Filter</div>
                <div class="dropdown ">
                    <button class="btn btn-default col-xs-3 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Sort
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" ng-click="changeSort('disabledFriendly')">Recommended</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#" ng-click="changeSort('TotalFare')">Cheapest</a></li>
                    </ul>
                </div>
            </div>

            <div class="container" style="background:rgb(242, 242, 242);margin-top: 15px;">
                <div class="row" style="padding:0px 15px 15px 15px;">
                    <div class="col-sm-6 portfolio-item e-education" style="padding-right:0px;padding-left:0px">
                        <div ng-repeat="record in RecordsCount = ( records | orderBy:SortBy:ReverseSort | filter: searchFiltered)">
                            <div class="row" style="margin-top:10px;padding-bottom:10px;border-bottom:1px solid #CECCCC;
                            padding-right:15px;padding-left:15px">

                                <div class="container" style="padding-right:0px;padding-left:0px">
                                    <div class="col-xs-1" style="padding-right:0px;padding-left:0px"><img src="images/EmiratesFlightLogo.png" class="img-responsive" alt="" style="height:inherit;"></div>
                                    <div class="col-xs-10" style="font-weight: bold;padding-left:10px;" data-toggle="modal" data-target="#flightdetail" ng-click="getRecord(record)">Emirates</div>
                                </div>
                                <div ng-repeat="leg in record.Legs">
                                    <div class="f-detail">{{leg.DepartureTime}} {{leg.DepartureAirportCode}} &nbsp;&nbsp;<i class="fa fa-paper-plane"></i>&nbsp; {{leg.ArrivalTime}} {{leg.ArrivalAirportCode}}<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;{{leg.Duration}}</span></div>
                                </div>
                                <div class="col-xs-8" style="padding-left:0px;">
                                    <div>{{record.Stops}} Transit<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;{{record.LayOver}}</span></div>
                                    <div ng-if="record.WeelChair == 'true'">
                                    	<div font-weight:bold;><i class="fa fa-wheelchair"></i>&nbsp;wheelchair friendly</span></div>
                                    </div>
                                </div>
                                <div type="submit" class="btn btn-default col-xs-4" style="margin-top:7px;" ><a href="Experience.php" style="color:inherit;">${{record.TotalFare}}</a></div>
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
                        <div class="form-group">
		                    <label><input type="checkbox" ng-model="IsChair"> Wheelchair accessible toilet </label>
                        </div>
		                    <div class="form-group">
		                        <label for="exampleInputName2">Max flight duration (hrs)</label>
		                        <input type="text" class="form-control" id="exampleInputName2" placeholder="10" ng-model="MaxDuration" >
		                    </div>
		                    <div class="form-group">
		                        <label for="exampleInputName2">Minimum layover time (hrs)</label>
		                        <input type="text" class="form-control" id="exampleInputName2" placeholder="3" ng-model="MinLayover">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
        </div>
		    <!-- Modal -->
		    <div class="modal fade" id="flightdetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                    <h4 class="modal-title" id="myModalLabel">Flight Detail</h4>
		                </div>
		                <div class="modal-body">
					        <div class="container" style="background:rgb(242, 242, 242);margin-top: 15px;">
				                <div class="row" style="padding:15px;">
				                    <div class="col-sm-6 portfolio-item e-education">
				                        <div>
				                            <div class="row">

				                                <div class="row">
				                                    <div class="col-xs-2"><img src="images/EmiratesFlightLogo.png" class="img-responsive" alt="" style="height:inherit;"></div>
				                                    <div class="col-xs-10" style="font-weight: bold;padding-left:0px;">Emirates</div>
				                                </div>
				                                <div ng-repeat="leg in flightRecord.Legs">
				                                    <div class="f-detail">{{leg.DepartureTime}} {{leg.DepartureAirportCode}} &nbsp;&nbsp;<i class="fa fa-paper-plane"></i>&nbsp; {{leg.ArrivalTime}} {{leg.ArrivalAirportCode}}<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;{{leg.Duration}}</span></div>
				                                </div>
				                                <div class="col-xs-8" style="padding-left:0px;">
				                                    <div>{{flightRecord.Stops}} Transit<span style="padding-left: 15px"><i class="fa fa-clock-o"></i>&nbsp;{{flightRecord.Duration}}</span></div>
				                                    <div font-weight:bold;><i class="fa fa-wheelchair"></i>&nbsp;wheelchair friendly</span></div>
				                                </div>
				                                <div type="submit" class="btn btn-default col-xs-3" style="margin-top:7px;" data-toggle="modal" data-target="#myModal">${{flightRecord.TotalFare}}</div>
				                            </div>

				                        </div>
				                    </div>
				                    <div>
				                    <p style="font-weight:bold;">Ratings</p>
				                    <p>Disabled friendly airport <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
				                    <p>Wheelchair friendly airport <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></p>
				                    <p>Lounge Details <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
				                    </div>
				                </div>
				            </div>
		                </div>
		            </div>
		        </div>
		    </div>


    </div>
</div>




    <script type="text/javascript">

        var app = angular.module('App', ['checklist-model', 'angular.filter']);

        app.controller('MainCtrl', ['$scope', function ($scope) {

            $scope.SortBy = "disabledFriendly"
            $scope.ReverseSort = false;
            $scope.IsChair = false;
            $scope.MaxDuration = 0
            $scope.MinLayover = 0;
            $scope.flightRecord = null;


            //$scope.RecordsCount = 0;

            $scope.changeSort = function (sort) {

                if ($scope.SortBy === sort)
                {
                    if ($scope.ReverseSort === true) {
                        $scope.ReverseSort = false;
                    }
                    else
                    {
                        $scope.ReverseSort = true;
                    }
                }
                else
                {

                    $scope.SortBy = sort;
                    $scope.ReverseSort = false;
                }
            };

            $scope.checkChair = function (isChair) {

                if (isChair.toString() === $scope.IsChair.toString())
                {
                    return true;
                }
                else
                {
                    return false;
                }
            };
            $scope.getRecord = function (record) {
	            $scope.flightRecord = record;

            };

            $scope.checkMaxDuration = function (duration) {

                $scope.hIndex = duration.indexOf('h');
                if (duration.substring(0, $scope.hIndex) >= $scope.MaxDuration) {
                    return true;
                }
                else {
                    return false;
                }
            };

            $scope.checkMinLayover = function (layOver) {

                $scope.hIndex = layOver.indexOf('h');
                if (layOver.substring(0, $scope.hIndex) >= $scope.MinLayover) {
                    return true;
                }
                else {
                    return false;
                }
            };

            $scope.searchFiltered = function (row) {

                if (($scope.IsChair == false || $scope.checkChair(row.WeelChair)) &&
                    ($scope.MaxDuration == 0 || $scope.checkMaxDuration(row.Legs[0].Duration)) &&
                    ($scope.MaxDuration == 0 || $scope.checkMaxDuration(row.Legs[1].Duration)) &&
                    ($scope.MinLayover == 0 || $scope.checkMinLayover(row.LayOver))
                 )
                {
                    return true;
                }
            };

            $scope.records = [
              {
                  "_id": 1,
                  "FarePrice": 1020.00,
                  "TotalTax": 110.00,
                  "TotalFare": 1120.00,
                  "DepartureAirport": "Changi International",
                  "DepartureAirportCode": "SIN",
                  "DepartureTime": "10:35",
                  "DepartureDate": "15-04-2015",
                  "Duration": "22h 50m",
                  "ArrivalAirport": "John F Kennedy International Airport",
                  "ArrivalAirportCode": "JFK",
                  "ArrivalDate": "15-04-2015",
                  "ArrivalTime": "20:45",
                  "Stops": 1,
                  "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
                  "WeelChair": "false",
                  "disabledFriendly": 2,
                  "Currency": "SGD",
                  "FlightType": "Departure",
                  "LayOver": "1h 20m",
                  "Legs": [
                      {
                          "DepartureAirportCode": "SIN",
                          "DepartureTime": "10:35",
                          "Duration": "7h 20m",
                          "ArrivalAirportCode": "DXB",
                          "ArrivalTime": "13:40",
                          "FlightNo": "EK433",
                          "DepartureDate": "15-04-2015",
                          "ArrivalDate": "15-04-2015",
                          "DepartureAirport": "SIN",
                          "ArrivalAirport": "DXB",
                          "WeelChair": "false",
                          "disabledFriendly": 2,
                          "FlightModel": "Boeing 777-300ER"
                      },
                      {
                          "DepartureAirportCode": "DXB",
                          "DepartureTime": "15:00",
                          "Duration": "7h 20m",
                          "ArrivalAirportCode": "JFK",
                          "ArrivalTime": "20:45",
                          "FlightNo": "EK207",
                          "DepartureDate": "15-04-2015",
                          "ArrivalDate": "15-04-2015",
                          "DepartureAirport": "Dubai",
                          "ArrivalAirport": "John F Kennedy International Airport",
                          "LayOver": "1h 20m",
                          "disabledFriendly": 2,
                          "FlightModel": "Airbus A380-800"
                      }
                  ]
              },

        {
            "_id": 2,
            "FarePrice": 1130.00,
            "TotalTax": 130.70,
            "TotalFare": 1260.70,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "09:40",
            "DepartureDate": "15-04-2015",
            "Duration": "23h 5m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "15-04-2015",
            "ArrivalTime": "20:45",
            "Stops": 1,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "true",
            "disabledFriendly": 1,
            "Currency": "SGD",
            "FlightType": "Departure",
            "LayOver": "1h 20m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "09:40",
                    "Duration": "7h 15m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "12:55",
                    "FlightNo": "EK433",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "true",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "15:00",
                    "Duration": "7h 20m",
                    "ArrivalAirportCode": "JFK",
                    "ArrivalTime": "20:45",
                    "FlightNo": "EK207",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F Kennedy International Airport",
                    "LayOver": "1h 20m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ]
        },

        {
            "_id": 3,
            "FarePrice": 1560.00,
            "TotalTax": 153.00,
            "TotalFare": 1713.70,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "21:25",
            "DepartureDate": "15-04-2015",
            "Duration": "23h 25m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "16-04-2015",
            "ArrivalTime": "08:50",
            "Stops": 1,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "false",
            "disabledFriendly": 1,
            "LayOver": "3h 40m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "21:25",
                    "Duration": "7h 30m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "00:55",
                    "FlightNo": "EK433",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "16-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "false",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "02:50",
                    "Duration": "14 0m",
                    "ArrivalAirportCode": "JFK",
                    "ArrivalTime": "08:50",
                    "FlightNo": "EK203",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "16-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F Kennedy International Airport",
                    "LayOver": "1h 55m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ],
            "Currency": "SGD",
            "FlightType": "Departure"
        },

        {
            "_id": 4,
            "FarePrice": 1560.00,
            "TotalTax": 153.70,
            "TotalFare": 1713.70,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "21:25",
            "DepartureDate": "15-04-2015",
            "Duration": "23h 25m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "16-04-2015",
            "ArrivalTime": "08:50",
            "Stops": 1,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "true",
            "disabledFriendly": 1,
            "Currency": "SGD",
            "FlightType": "Departure",
            "LayOver": "3h 40m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "21:25",
                    "Duration": "7h 30m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "00:55",
                    "FlightNo": "EK355",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "16-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "true",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "02:50",
                    "Duration": "14 0m",
                    "ArrivalAirportCode": "JFK",
                    "ArrivalTime": "08:50",
                    "FlightNo": "EK203",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "16-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F Kennedy International Airport",
                    "LayOver": "1h 55m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ]
        },

        {
            "_id": 5,
            "FarePrice": 1660.00,
            "TotalTax": 155.80,
            "TotalFare": 1815.80,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "01:40",
            "DepartureDate": "15-04-2015",
            "Duration": "24h 35m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "15-04-2015",
            "ArrivalTime": "14:15",
            "Stops": 1,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "true",
            "disabledFriendly": 1,
            "Currency": "SGD",
            "FlightType": "Departure",
            "LayOver": "3h 40m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "01:40",
                    "Duration": "7h 10m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "04:50",
                    "FlightNo": "EK405",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "true",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "08:30",
                    "Duration": "13 45m",
                    "ArrivalAirportCode": "JFK",
                    "ArrivalTime": "14:15",
                    "FlightNo": "EK201",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F Kennedy International Airport",
                    "LayOver": "3h 40m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ]
        },

        {
            "_id": 5,
            "FarePrice": 1660.00,
            "TotalTax": 155.80,
            "TotalFare": 1815.80,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "01:40",
            "DepartureDate": "15-04-2015",
            "Duration": "24h 35m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "15-04-2015",
            "ArrivalTime": "14:15",
            "Stops": 1,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "true",
            "disabledFriendly": 1,
            "Currency": "SGD",
            "FlightType": "Departure",
            "LayOver": "3h 40m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "01:40",
                    "Duration": "7h 10m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "04:50",
                    "FlightNo": "EK405",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "true",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "08:30",
                    "Duration": "13 45m",
                    "ArrivalAirportCode": "JFK",
                    "ArrivalTime": "14:15",
                    "FlightNo": "EK201",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F Kennedy International Airport",
                    "LayOver": "3h 40m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ]
        },

        {
            "_id": 6,
            "FarePrice": 1800.00,
            "TotalTax": 155.80,
            "TotalFare": 1955.80,
            "DepartureAirport": "Changi International",
            "DepartureAirportCode": "SIN",
            "DepartureTime": "01:40",
            "DepartureDate": "15-04-2015",
            "Duration": "34h 45m",
            "ArrivalAirport": "John F Kennedy International Airport",
            "ArrivalAirportCode": "JFK",
            "ArrivalDate": "16-04-2015",
            "ArrivalTime": "08:50",
            "Stops": 2,
            "SellKey": "8d22d5ea-06ac-42d6-b15d-0b08c33bbfb7",
            "WeelChair": "true",
            "disabledFriendly": 1,
            "Currency": "SGD",
            "FlightType": "Departure",
            "LayOver": "2h 55m",
            "Legs": [
                {
                    "DepartureAirportCode": "SIN",
                    "DepartureTime": "09:40",
                    "Duration": "7h 15m",
                    "ArrivalAirportCode": "DXB",
                    "ArrivalTime": "12:55",
                    "FlightNo": "EK433",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "SIN",
                    "ArrivalAirport": "DXB",
                    "WeelChair": "true",
                    "disabledFriendly": 1,
                    "FlightModel": "Boeing 777-300ER"
                },
                {
                    "DepartureAirportCode": "DXB",
                    "DepartureTime": "14:20",
                    "Duration": "04 35m",
                    "ArrivalAirportCode": "IST",
                    "ArrivalTime": "17:55",
                    "FlightNo": "EK121",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "15-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "Istanpul-IST",
                    "LayOver": "1h 25m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                },
                {
                    "DepartureAirportCode": "IST",
                    "DepartureTime": "19:25",
                    "Duration": "14 35m",
                    "ArrivalAirportCode": "IST",
                    "ArrivalTime": "08:50",
                    "FlightNo": "EK121",
                    "DepartureDate": "15-04-2015",
                    "ArrivalDate": "16-04-2015",
                    "DepartureAirport": "Dubai",
                    "ArrivalAirport": "John F kennady Airport- New Yark",
                    "LayOver": "1h 30m",
                    "disabledFriendly": 1,
                    "FlightModel": "Airbus A380-800"
                }
            ]
        }

         ];

            

        }]);

    </script>


<?php include_once("base_bottom.html"); ?>