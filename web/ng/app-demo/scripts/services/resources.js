var entities = {
    'User': [],
    'Room': ['furnitures'],
    'Furniture': []
}

angular.forEach(entities, function (children, entity) {

    // children query
    var customMethods = {
        'update': {method: 'PUT'}
    };
    children.forEach(function(child){
        customMethods[child] = {method: 'GET'};
    });

    app.factory(entity, ['$resource', function ($resource) {
        return $resource(API + entity.toLowerCase() + 's/:id',
            {id: '@id'},
            customMethods
        )
    }])
})