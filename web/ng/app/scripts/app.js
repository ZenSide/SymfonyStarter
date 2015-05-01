'use strict';

var API = "../../app_dev.php/api/";
var app = angular.module('ngAppApp', ['ngResource','ui.router','ngMaterial','ngMdIcons']);

app.run(function ($rootScope, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
});