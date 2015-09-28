// MODULE
var myApp = angular.module('jessicaCabral', ['ngRoute']);

// ROUTES
myApp.config(function ($routeProvider) {
    
    $routeProvider
    
    .when('/', {
        templateUrl: 'src/pages/landing.html',
        controller: 'landingController',
        activetab: 'landing'
    })

        .when('/aboutMe', {
        templateUrl: 'src/pages/aboutMe.html',
        controller: 'aboutMeController',
        activetab: 'aboutMe'
    })
    
    .when('/events', {
        templateUrl: 'src/pages/events.html',
        controller: 'eventsController',
        activetab: 'events'
    })
    
    .when('/events/:eventTitle', {
        templateUrl: 'src/pages/events.html',
        controller: 'eventsController',
        activetab: 'events'
    })

    .when('/press', {
        templateUrl: 'src/pages/press.html',
        controller: 'pressController',
        activetab: 'press'
    })
    
});


// CONTROLLERS
myApp.controller('mainController', ['$scope', '$route', '$location', function($scope, $route, $location) {

    //set the navbar active tab
    $scope.isActive = function(route) {
        return route === $location.path();
    }


}]);

myApp.controller('landingController', ['$scope', function($scope) {

    $scope.name = 'Landing Page';

}]);

myApp.controller('aboutMeController', ['$scope', function($scope) {

    $scope.name = 'About Me';

}]);

myApp.controller('eventsController', ['$scope', function($scope) {

    $scope.name = 'Weddings';
    
}]);	

myApp.controller('pressController', ['$scope', function($scope) {

	$scope.name = 'Press';
}]);