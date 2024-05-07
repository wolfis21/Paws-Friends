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

                //todo js
                'resources/js/app.js',
                "resources/sass/app.scss",
                "resources/js/app.js",

                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
