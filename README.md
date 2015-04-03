SymfonyStarter
==============

Allow to start a fresh project with preconfigured bundles :
- fosuser
- sonata
- rest

To create a new project :
- clone repository
- change db parameters in app/config/parameters.yml

A bundle named AppBundle is ready to start with. Some rename operations can set it to your new project name :
- rename folder src/AppBundle to src/YourBrand/YourBundle
- "namespace AppBundle" to "namespace Brand\YourBundle"
- "AppBundle\" to "Brand\YourBundle\"
- "appbundle" to "brand/yourbundle"
- "AppBundle" to "BrandYourBundle"

Angular is added on folder /web with yeoman support