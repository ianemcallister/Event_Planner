// MODULE
var myApp = angular.module('jessicaCabral', ['ngRoute', 'ui', "dang-jssor"]);

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

    $(".alert").hide();

    $("#Login").click(function(event) {

        $("#success").fadeIn();
    });

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

    });

    $scope.basicUsageOptions = {
                       $AutoPlay: true
                   };

                    $scope.sliderWithArrowOptions = {
                        $DragOrientation: 3,                            //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                        $SlideDuration: 80,                            //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500

                        $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                            $ChanceToShow: 2,                           //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $AutoCenter: 2,                             //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                            $Steps: 1                                   //[Optional] Steps to go for each navigation request, default value is 1
                        }
                    }

    $scope.images = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg", "09.jpg", "10.jpg", "11.jpg", "12.jpg", "13.jpg", "14.jpg", "15.jpg", "16.jpg", "17.jpg", "18.jpg", "19.jpg"];

}]);    

myApp.controller('pressController', ['$scope', function($scope) {

    $scope.name = 'Press';
}]);



// DIRECTIVES
myApp.directive("testimonial", function() {
    return {
        restrict: 'E',
        templateUrl: 'src/directives/aTestimonial.html',
        replace: true,
        scope: {
            testimonialObject: "=",
        }
    }
});

myApp.directive("vendor", function() {
    return {
        restrict: 'AECM',
        templateUrl: 'src/directives/aVendor.html',
        replace: true,
        scope: {
            vendorObject: "=",
        }
    }
});