'use strict';


app.controller('MainCtrl', ['$scope', 'User', function ($scope, User) {

    $scope.users = User.query();

    $scope.selectUser = function (user) {
        $scope.currentUser = User.get({id:user.id});
    }
}]);
