# wp-vue

Vue js use with wordpress plugin

#vite.config.js

import vue from '@vitejs/plugin-vue';

import { defineConfig } from 'vite';

export default defineConfig({
plugins: [vue()],
server: {
cors: true,
},
});
