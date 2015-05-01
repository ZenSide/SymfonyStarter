app.config(function($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/accueil");
    //
    // Now set up the states
    $stateProvider
        .state('accueil', {
            url: "/",
            templateUrl: "views/accueil.html"
        })
        .state('rooms', {
            url: "/rooms",
            templateUrl: "views/rooms.html",
            controller: 'RoomCtrl'
        })
        .state('rooms.furnitures', {
            url: "/{roomId}/furnitures",
            templateUrl: "views/furnitures.html",
            controller: 'FurnitureCtrl'
        })
        .state('users', {
            url: "/users",
            templateUrl: "views/users.html",
            controller: 'UserCtrl'
        })
});