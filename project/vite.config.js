 import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // todo css de navMenu

                //todo css de mainView
                'resources/css/moduloServicios/user/index.css',
                'resources/css/moduloServicios/admin/index.css',
'                resources/css/moduloServicios/user/indexServic.css',
                //TOdo profile
                'resources/css/profile/index.css',

                //todo servies
                'moduloServicios/stars/star.css',
                //todo js
                '/project/public/js/moduloServicios/star.js',
                "resources/js/app.js",

                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
