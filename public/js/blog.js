// public/js/moduleName.js

(function() {
    "use strict";

    // This should be the actual name of your module
    var app = angular.module("blog", []);

    // Find the token value from the page using jQuery
    var token = $("meta[name=csrf-token]").attr("content");
    
    // Set the token as an Angular constant
    app.constant("CSRF_TOKEN", token);
    
    // Configure $http to include both your token and a flag indicating the request is AJAX
    app.config(["$httpProvider", "CSRF_TOKEN", function($httpProvider, CSRF_TOKEN) {
        $httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
        $httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
    }]);

    app.controller('TestController', ['$scope', '$log', '$http', function($scope, $log, $http) {
    	$log.info('Hello Glacier!');

/*.then takes in 2 functions; 1st anonymous - if there is data from the server it gets passed
as parameter in response handler*/
    	$http.get("/test-json").then(function(data) {
    		$log.debug(data);
    		/*2nd parameter takes in response - for when things go wrong*/
    	}, function(response) {
    		$log.error('Something has gone wrong');

    		$log.debug('response');
    	}
    	})
    }]);
    /*need ng repeat */
})();

