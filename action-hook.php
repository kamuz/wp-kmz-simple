<?php

function kmz_action_hook_example(){
    wp_mail('email@example.com', 'Subject', 'Message...');
}
add_action('init', 'kmz_action_hook_example');