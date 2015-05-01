'use strict';

app.controller('MainCtrl', ['$scope', function ($scope) {
    $scope.title = "Super site génial";
}]);

app.controller('MenuCtrl', ['$scope','$state', function ($scope, $state) {

    var SMALL_SIZE = $scope.SMALL_SIZE = 24;
    var BIG_SIZE = 45;

    $scope.menu = [
        {
            state: 'rooms',
            txt: 'List of rooms',
            icon: 'home',
            icon2: 'forward'
        },
        {
            state: 'users',
            txt: 'List of users',
            icon: 'face',
            icon2: 'forward'
        }
    ];
    $scope.selectMenu = function(item){
        $state.go(item.state);
        $scope.selected = item;
        // the only way to apply transition on size change
        setTimeout(function(){
            $scope.menu.forEach(function(i){i.size = SMALL_SIZE});
            item.size = BIG_SIZE;
            $scope.$apply();
        });
    }
}]);

app.controller('UserCtrl', ['$scope', 'User', function ($scope, User) {

    $scope.users = User.query();

    $scope.selectUser = function (user) {
        $scope.currentUser = user;
    }
}]);

app.controller('RoomCtrl', ['$scope', 'Room','$state', function ($scope, Room,$state) {

    $scope.rooms = Room.query();

    $scope.selectRoom = function (room) {
        $state.go('rooms.furnitures',{roomId:room.id})
    }
}]);

app.controller('FurnitureCtrl', ['$scope', 'Room', '$stateParams',function ($scope, Room, $stateParams) {

    $scope.furnitures = Room.furnitures({id: $stateParams.roomId});
}]);
