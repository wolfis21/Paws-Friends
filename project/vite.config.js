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

                //todo dataTables
                //?CSS
                // 'resources/css/moduloServicios/admin/dataTables/bootstrap.min.css',
                // 'resources/css/moduloServicios/admin/dataTables/dataTables.bootstrap5.min.css',
                //?JS
                'moduloServicios/js/admin/dataTables/scriptDatatables.js',
                //todo js
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
