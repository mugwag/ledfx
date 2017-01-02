
(function() {

    'use strict';

var app =  angular
        .module('StarterApp');

        app.filter('month', function() {
          return function(date) {
            var time = date.split(" ");
            var date = time[0].split("-");
            var day = date[2];
            var year = date[0];
            var month = date[1];

            var d = new Date(year, month, day);

            var months = new Array(12);
            months[1] = "January";
            months[2] = "February";
            months[3] = "March";
            months[4] = "April";
            months[5] = "May";
            months[6] = "June";
            months[7] = "July";
            months[8] = "August";
            months[9] = "September";
            months[10] = "October";
            months[11] = "November";
            months[12] = "December";

            var eventDate = new Array(3);
            eventDate[0] = day;
            eventDate[1] = months[d.getMonth()];
            eventDate[2] = year;

            return months[d.getMonth()];
            //return eventDate;

          };
        });

        app.filter('day', function() {
          return function(date) {


            var time = date.split(" ");
            var date = time[0].split("-");
            var day = date[2];
            var year = date[0];
            var month = date[1];

            var d = new Date(year, month, day);

            return day;
            //return eventDate;

          };
        });

        app.controller('AdminController', function($scope, $http) {

          $http.get('http://dev.ledfx:8888/testdata/apidata.json').then(function(act) {
              $scope.actdata = act;
              console.log($scope.actdata);
            })

        });



/**
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/

  })(); // EO controller file
