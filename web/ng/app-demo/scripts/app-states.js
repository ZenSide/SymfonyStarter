app.config(function($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/accueil");
    //
    // Now set up the states
    $stateProvider
        .state('accueil', {
            url: "/",
            templateUrl: "accueil.html"
        })
        .state('rooms', {
            url: "/rooms",
            templateUrl: "rooms.html",
            controller: 'RoomCtrl'
        })
        .state('rooms.furnitures', {
            url: "/furnitures",
            templateUrl: "furnitures.html",
            controller: 'FurnitureCtrl'
        })
        .state('users', {
            url: "/users",
            templateUrl: "users.html",
            controller: 'UserCtrl'
        })
});