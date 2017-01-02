
(function() {

    'use strict';

var app =  angular
        .module('StarterApp');

        app.controller('AdminController', function($scope, $http, $mdDialog) {

          $http.get('http://dev.ledfx:8888/testdata/apidata.json').then(function(act) {
              $scope.actdata = act;
              console.log($scope.actdata);
            })

        });

  })(); // EO controller file
