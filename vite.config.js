import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';

export default defineConfig({
    plugins: [laravel()],
    build: {
        outDir: 'public/build', // Ensure this points to the correct build directory
    },
});