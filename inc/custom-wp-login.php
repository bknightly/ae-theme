<?php

// Change logo graphic
function ae_login_logo() { ?>
    <style type="text/css">
        #login { padding: 4% 0 0 !important; }
        #login h1 a, 
        .login h1 a { 
            background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/laundry-express-logo.svg') no-repeat center center;
            height: 100px;
            width: 320px;
            margin: 30px auto 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ae_login_logo' );

// Change Logo URL and Title
function ae_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'ae_login_logo_url' );

function ae_login_logo_url_title() {
    return 'Alterations Express';
}
add_filter( 'login_headertext', 'ae_login_logo_url_title' );

?>