<?php

add_action(
    'customize_controls_print_footer_scripts',
    function() {
        $path = apply_filters( 'kirki_control_view_code', __DIR__ . '/view.php' );
        echo '<script type="text/html" id="tmpl-kirki-input-code">';
        include $path;
        echo '</script>';
    }
);
