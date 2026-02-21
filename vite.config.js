import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
            // ⚠️ Ajout pour la production :
            buildDirectory: 'build', // dossier de sortie relatif à public/
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build', // Vite va générer manifest.json ici
        emptyOutDir: true, // vide le dossier build à chaque build
    },
});
