<?php
// WordPress Installation Script
define('WP_INSTALLING', true);

// Load WordPress
require('wp-load.php');
require('wp-admin/includes/upgrade.php');

// Create tables
dbDelta("
CREATE TABLE IF NOT EXISTS {$GLOBALS['wpdb']->posts} (
  ID bigint(20) unsigned NOT NULL auto_increment,
  post_author bigint(20) unsigned NOT NULL default '0',
  post_date datetime NOT NULL default '0000-00-00 00:00:00',
  post_date_gmt datetime NOT NULL default '0000-00-00 00:00:00',
  post_content longtext NOT NULL,
  post_title text NOT NULL,
  post_excerpt text NOT NULL,
  post_status varchar(20) NOT NULL default 'publish',
  post_type varchar(20) NOT NULL default 'post',
  PRIMARY KEY (ID)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
");

// Set site options
update_option('siteurl', 'http://localhost:8080');
update_option('home', 'http://localhost:8080');
update_option('blogname', 'G.D.I - Goldberg Development Instruction');
update_option('blogdescription', 'Dark, dramatic marketing site for Goldberg Development');
update_option('admin_email', 'alon77@gmail.com');
update_option('users_can_register', false);
update_option('template', 'gdi');
update_option('stylesheet', 'gdi');

// Create admin user if not exists
if (!username_exists('admin')) {
    wp_create_user('admin', 'gdi_secure_2024', 'alon77@gmail.com');
    $user = new WP_User(1);
    $user->set_role('administrator');
    echo "✅ Admin user created: admin / gdi_secure_2024\n";
}

echo "✅ WordPress installed successfully!\n";
echo "✅ GDI theme set as active\n";
?>
