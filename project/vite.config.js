 import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //todo css admin
                'resources/css/moduloServicios/admin/index.css',
                // todo css de navMenu

                
                //style modulo 2
                'resources/css/moduloRescate/stylehc.css',
                'resources/css/moduloRescate/servicio.css',

                //todo css de mainView
                'resources/css/moduloServicios/user/index.css',
                'resources/css/moduloServicios/admin/index.css',
'                resources/css/moduloServicios/user/indexServic.css',
                'resources/css/login/loginUser.css',
                'resources/css/navMenu/app.css',
                //TOdo profile
                'resources/css/profile/index.css',
                'resources/css/register/registroUser.css',

                //todo servies 
                'moduloServicios/stars/star.css',

                //todo modulo 1 Servicios
                'resources/css/moduloServicios/user/index.css',
                'resources/css/moduloServicios/user/indexServices.css',
                'resources/css/moduloServicios/user/showServices.css',
                'resources/js/messageAction.js',

                //todo comentarios
                'resources/css/moduloServicios/user/comments.css',
                
                //todo modulo 3 adopciones y donaciones
                'resources/css/moduloAdopcionesDonaciones/index.css',
                'resources/css/moduloAdopcionesDonaciones/adopciones.css',
                

                //todo modulo 4
                'css/moduloCatalogo/productCategory.css',
                //todo js
                '/project/public/js/moduloServicios/star.js',
                "resources/js/app.js",

                'resources/js/app.js',

            ],
            refresh: true,
        }),
    ],
});
