'use strict';


app.controller('MainCtrl', ['$scope', function ($scope) {
    $scope.title = "Super site génial";
}]);
app.controller('MenuCtrl', ['$scope', function ($scope) {

    $scope.menu = [
        {
            state: 'rooms',
            txt: 'List of rooms'
        },
        {
            state: 'users',
            txt: 'List of users'
        }
    ];
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
