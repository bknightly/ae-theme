<?php
acf_register_block_type(
  array(
    'name'              => 'featured-content',
    'title'             => __('Featured Content'),
    'description'       => __('Featured Content (full width), used in Home page title section'),
    'render_template'   => 'blocks/featured-content/featured-content.php',
    'category'          => 'text',
    'supports'          => array(
        'align' => false,
    ),
    // Specifying a custom HTML svg for the block
    'icon' => 
      '<svg enable-background="new 0 0 149.3 177.9" version="1.1" viewBox="0 0 149.3 177.9" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <style type="text/css">
          .st0{fill:#8EC63E;}
          .st1{fill:#0073BA;}
        </style>
        <path class="st0" d="m106.9 157.8c-46 0-83.4-37.3-83.4-83.4 0-26.5 12.4-50.1 31.7-65.4-31 12.2-52.9 42.3-52.9 77.6 0 46 37.3 83.4 83.4 83.4 19.5 0 37.5-6.7 51.7-18-9.4 3.7-19.7 5.8-30.5 5.8z"/>
        <path class="st1" d="m42.2 87.7c0-34.8 28.2-63 63-63 16 0 30.6 6 41.8 15.8-11.1-18-31-29.9-53.6-29.9-34.8 0-63 28.2-63 63 0 18.8 8.2 35.6 21.3 47.2-6.1-9.6-9.5-20.9-9.5-33.1z"/>
      </svg>',
  )
);