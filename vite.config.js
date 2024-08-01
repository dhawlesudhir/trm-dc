import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/style.css",
                "resources/css/theme.scss",
                "resources/css/user.scss",
                "resources/js/bootstrap-config.js",

                // pages
                "resources/js/main/main.js",
            ],
            refresh: true,
        }),
    ],
});
