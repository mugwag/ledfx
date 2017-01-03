
(function() {

    'use strict';

var app =  angular
        .module('StarterApp');

        app.directive('loading',   ['$http' ,function ($http)
    {
        return {
            restrict: 'A',
            link: function (scope, elm, attrs)
            {
                scope.isLoading = function () {
                    return $http.pendingRequests.length > 0;
                };

                scope.$watch(scope.isLoading, function (v)
                {
                    if(v){
                        elm.show();
                    }else{
                        elm.hide();
                    }
                });
            }
        };

    }]);

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

        app.filter('maxLines', function() {
          return function(txt,  limit) {

              var parts = txt.split("\n");

              if(limit == 0) return parts.join('\n');
              var htmldata = parts.slice(0,limit).join('\n');

              return htmldata;
              }
        });

        app.filter('textSize', function() {
          return function(txt, letterLimit, linesLimit) {

              var length = txt.length;
              var parts = txt.split("\n");
              var flag = false;

              if(length > letterLimit) {
                flag = true;
                }

              if(parts[linesLimit]){
                flag = true;
              }

              return flag;
              }
        });

        app.controller('AdminController', function($scope, $http) {

          $scope.doc_classes_colors = _.shuffle([
             "#ffcdd2",
             "#f8bbd0",
             "#e1bee7",
             "#d1c4e9",
             "#c5cae9",
             "#bbdefb",
             "#b3e5fc",
             "#b2ebf2",
             "#b2dfdb",
             "#c8e6c9",
             "#dcedc8",
             "#f0f4c3"
        ]);
          $scope.getRandomColor = function () {
          $scope.bgColor = $scope.doc_classes_colors[Math.floor(Math.random() * $scope.doc_classes_colors.length)];
          };

          $scope.letterLimit = 250;
          $scope.linesLimit = 5;

          $http.get('http://admin.soundfi:8888/api/actdata?slug=theqemists').then(function(act) {
              $scope.actdata = act;
            })

        });



/**
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/

  })(); // EO controller file
