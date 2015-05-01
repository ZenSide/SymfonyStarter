ZenSide SymfonyStarter
==============

A ready-to-use Symfony2-REST-Angular project
 - sonata admin is on /web
 - angular is on /web/ng/app

Allow to start a fresh project with preconfigured bundles :
- fosuser
- sonata
- rest

Symfony2 is used to back office data with sonata and offer a REST server to angular

A fresh Angular is preconfigured with npm and bower and some modules :
- angular
- angular-resource
- bootstrap
- jquery

A demo bundle (ZenSideDemoBundle) is present in S2 with some demo Entity, Admin & Rest route & controller
- Sonata admin with Room wich contains Furnitures
- Rest route & controller for users (only for nb demo)

To create a new project :
- clone repository
- remove .git folder
In main folder :
- composer update
- php app/console doctrine:database:create
- php app/console doctrine:schema:update --force
- php app/console doctrine:fixtures:load
- composer update
In /web/ng folder :
- npm install
- bower install

Remove Demo Bundle from /src, /app/config.php, /app/routing.php to start a new Clean project.
Develop Angular Front to fit your needs !

Ajouter une entité au REST
1. créer l'entité "generate:doctrine:entity"
2. ajouter les relations onetomany & manytoone
3. annoter les champs à transmettre avec les annotations jos
4. générer l'entity formType "generate:doctrine:form AcmeBlogBundle:Post" et l'adapter en fonction du besoin
5. créer un controlleur REST dans /controller/api
6. reférencer ce controlleur dans config_rest.yml
7. ajouter une entrée dans le tableau des entités angular resources.yml
8. enjoy GET, QUERY & POST !