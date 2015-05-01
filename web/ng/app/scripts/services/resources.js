var entities = {
    'User': [],
    'Room': ['furnitures'],
    'Furniture': []
}

angular.forEach(entities, function (children, entity) {

    var url = API + entity.toLowerCase() + 's/:id';
    // children query
    var customMethods = {
        'update': {method: 'PUT'}
    };
    children.forEach(function(child){
        customMethods[child] = {method: 'GET', url: url+'/'+child, isArray:true};
    });

    app.factory(entity, ['$resource', function ($resource) {
        return $resource(url,
            {id: '@id'},
            customMethods
        )
    }])
})