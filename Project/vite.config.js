import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            refresh: [
                'resources/view/**/*.blade.php'
            ],
        }),
    ],
    base: '/improved-adventure-p5vv7w5qx6jc7pgp-5173.app.github.dev/'
});
