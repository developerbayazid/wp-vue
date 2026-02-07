# wp-vue

Vue js use with wordpress plugin

#vite.config.js
import vue from '@vitejs/plugin-vue';
import { defineConfig } from 'vite';

// https://vite.dev/config/
export default defineConfig({
plugins: [vue()],
server: {
cors: true,
},
});
