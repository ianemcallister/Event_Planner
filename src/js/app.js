// MODULE
var myApp = angular.module('jessicaCabral', ['ngRoute', 'ui']);

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
    
    .when('/events/:eventNum/:eventTitle', {
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

//SERVICES
myApp.factory('eventDataService', function($http) {
  var myService = {
    async: function() {
      // $http returns a promise, which has a then function, which also returns a promise
      var promise = $http.get('src/php/api.php').then(function (response) {
        // The then function here is an opportunity to modify the response
        console.log(response);
        // The return value gets picked up by the then in the controller.
        return response.data;
      });
      // Return the promise to the controller
      return promise;
    }
  };
  return myService;
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

myApp.controller('eventsController', ['eventDataService', '$scope', '$routeParams', function(eventDataService, $scope, $routeParams) {

    //access event data
    eventDataService.async().then(function(d) { //2. so you can use .then()
        $scope.data = d;

        //assign local variables
        $scope.title = eval(String("$scope.data." + $routeParams.eventTitle + ".title"));
        $scope.testimonials = eval(String("$scope.data." + $routeParams.eventTitle + ".testimonials"));
        $scope.vendors = eval(String("$scope.data." + $routeParams.eventTitle + ".vendors"));
        $scope.images = eval(String("$scope.data." + $routeParams.eventTitle + ".images"));

        console.log($scope.testimonials);
    });



}]);	

myApp.controller('pressController', ['$scope', function($scope) {

	$scope.name = 'Press';
}]);



// DIRECTIVES
myApp.directive("testimonial", function() {
    return {
        restrict: 'AECM',
        templateUrl: 'src/directives/testimonial.html',
        replace: true,
        scope: {
            testimonialObject: "=",
        }
    }
});