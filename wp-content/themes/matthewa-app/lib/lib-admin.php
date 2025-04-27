<?php 

  class Admin {

    public function __construct() {
      add_action('admin_enqueue_scripts', [$this, 'admin_styles']);
    }

    function admin_styles() {
      
      wp_enqueue_style( 
        'admin-styles', get_template_directory_uri() . '/admin/admin.css', 
        array(), 
        filemtime( get_template_directory() . '/admin/admin.css' ) 
      );

    wp_enqueue_script(
      'admin-scripts',
      get_template_directory_uri() . '/admin/admin.js',
      array(),
      filemtime(get_template_directory() . '/admin/admin.js')
    );
      
    }
  } 