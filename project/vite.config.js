import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
<<<<<<< HEAD

=======
>>>>>>> ae9472e776cb0b3ff59b109646cf1b63f3a1c063
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
<<<<<<< HEAD
=======
                // origin/module-3
>>>>>>> ae9472e776cb0b3ff59b109646cf1b63f3a1c063
            ],
            refresh: true,
        }),
    ],
});
