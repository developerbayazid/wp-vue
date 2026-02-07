<?php

/**
 * Plugin Name: Vue Admin
 * Description: Vue based admin panel for wordpress
 * Author: Bayazid Hasan
 * Author Uri: https://github.com/developerbayazid
 */

class Vue_Admin {
    public function __construct()
    {
        add_action('admin_menu', function(){
            add_menu_page(
                'Vue Admin',
                'Vue Admin', 
                'manage_options',
                'vue-admin-vite',
                [$this, 'render_admin_panel_vue'],
                '',
                4
            );
        });

        add_action('admin_enqueue_scripts', [$this, 'load_scripts']);
        add_action('admin_head', [$this, 'share_data']);
    }

    public function load_scripts($hook)
    {
        wp_enqueue_script_module(
            'vue-admin-vite-js',
            'http://localhost:5173/src/main.js',
            [],
            time()
        );
    }

    public function share_data(){
        ?>
            <script>
                const ajax_url = '<?php echo admin_url('admin-ajax.php') ?>'
            </script>
        <?
    }

    public function render_admin_panel_vue($hook)
    {
        ?>
            <div class="wrap">
                <div id="app"></div>
            </div>
        <?php
    }
}

new Vue_Admin();