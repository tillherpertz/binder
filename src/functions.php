<?php
define( 'SCRIPT_ROOT', 'http://127.0.0.1/' );
include('includes/methods.php');

function do_main_nav() {
    global $dtm;

    $class = 'main_nav';
    
    $pages = array (
        array('name' => 'Home.', 'url' => 'home'),
        array('name' => 'Onehundo.', 'url' => 'onehundo'),
        array('name' => 'Aboutme.', 'url' => 'aboutme'),
        array('name' => 'Legal.', 'url' => 'legal')
    );
    return $dtm->navigation($pages, $class);
}

?>