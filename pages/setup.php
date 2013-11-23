<?php
#
# Setup page template
#
# based on setup.template.php from sample plugin.
#

// Do the include and authorization checking ritual -- don't change this section.
include '../../../include/db.php';
include '../../../include/authenticate.php'; if (!checkperm('a')) {exit ($lang['error-permissiondenied']);}
include '../../../include/general.php';

$plugin_name = $lang['rs_maintenance_name'];                       // Usually a string literal
$page_heading = $lang['rs_maintenance_admin_heading']; // Usually a $lang[] string
$page_intro = '<p>' . $lang['rs_maintenance_description'] . '</p>';                 // Usually either a $lang[] string or ''

// Build the $page_def array of descriptions of each configuration variable the plugin uses.
// Each element of $page_def describes one configuration variable. Each description is 
// created by one of the config_add_xxxx helper functions. See their definitions and
// descriptions in include/plugin_functions for more information.

$page_def[] = config_add_boolean_select('rs_maintenance_maintenance_enabled', $lang['rs_maintenance_maintenance_enabled']);

// Do the page generation ritual -- don't change this section.
$upload_status = config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, $upload_status, $page_heading, $page_intro);
include '../../../include/footer.php';