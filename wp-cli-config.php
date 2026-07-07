<?php
// WP-CLI Configuration for GDI.com
// This file is automatically loaded by WP-CLI

$_SERVER['HTTP_HOST'] = 'localhost:8080';

// Set WordPress database constants if needed
if ( ! defined( 'DB_NAME' ) ) {
    define( 'DB_NAME', 'gdi_wordpress' );
    define( 'DB_USER', 'gdi_user' );
    define( 'DB_PASSWORD', 'gdi_user_password' );
    define( 'DB_HOST', 'db' );
}
