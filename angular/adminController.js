
(function() {

    'use strict';

var app =  angular
        .module('StarterApp');

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
