var entities = ['User'];

entities.forEach(function (entity) {
    app.factory(entity, ['$resource', function ($resource) {
        return $resource(API + entity.toLowerCase() + 's/:id',
            {id: '@id'},
            {
                'update':{method:'PUT'}
            })
    }])
})