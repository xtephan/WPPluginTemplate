<?php
/*
 * Admin view for the plugin template
 * @author Stefan Fodor (stefan@unserialized.dk)
 */

//load any css and js specific to this admin panel, see files main.css and main.js
$that->loadCSS();
$that->loadJS();

//on post, update data
if( $_SERVER['REQUEST_METHOD'] === 'POST' ) { }
?>

<h2>Admin Panel here</h2>