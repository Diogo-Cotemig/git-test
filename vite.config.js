import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/Style.css',
                 'resources/js/Script.js'],
            refresh: true,
        }),
    ],
});
