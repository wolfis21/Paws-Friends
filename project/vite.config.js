import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // todo css de navMenu
                'resources/css/styleMain.css',
                'resources/css/app.scss',

                //todo css de mainView
                'resources/css/moduloServicios/index.css',

                //todo dataTables
                //?CSS
                // 'resources/css/moduloServicios/admin/dataTables/bootstrap.min.css',
                // 'resources/css/moduloServicios/admin/dataTables/dataTables.bootstrap5.min.css',
                
                //todo js
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
