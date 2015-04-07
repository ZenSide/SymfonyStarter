SymfonyStarter
==============

Allow to start a fresh project with preconfigured bundles :
- fosuser
- sonata
- rest

To create a new project :
- clone repository
- change db parameters in app/config/parameters.yml
- composer update
- php app/console doctrine:database:create
- php app/console doctrine:schema:update --force
- php app/console doctrine:fixtures:load

A bundle named ZenSide\CoreBundle is ready to start with. Some rename operations can set it to your new project name :
- rename folder src/ZenSide\CoreBundle to src/YourBrand/YourBundle
- "namespace ZenSide\CoreBundle" to "namespace Brand\YourBundle"
- "ZenSide\CoreBundle\" to "Brand\YourBundle\"
- "zenside/corebundle" to "brand/yourbundle"
- "ZenSide\CoreBundle" to "BrandYourBundle"

Angular is added on folder /web with yeoman support