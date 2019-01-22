<?php

function kmz_filter_hook_example( $content ){
    $content = '</p>Custom content...</p>' . $content;
    return $content;
}
add_filter('the_content', 'kmz_filter_hook_example');