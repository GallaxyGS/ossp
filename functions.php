<?php
wp_enqueue_style('WP', get_template_directory_uri() . "/css/wp-core.css");
wp_enqueue_style('BOOTSTRAP', get_template_directory_uri() . "/css/bootstrap.min.css");
wp_enqueue_style('style', get_stylesheet_uri());

wp_enqueue_script('JQUERY', "https://code.jquery.com/jquery-3.2.1.slim.min.js", null,null, true);
wp_enqueue_script('POOPER', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js", null, null, true);
wp_enqueue_script('BOOTSTRAP-JS', get_template_directory_uri() . "/js/bootstrap.min.js", null,null, true);