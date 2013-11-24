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

$page_def[] = config_add_boolean_select('rs_maintenance_maintenance_enabled', $lang['rs_maintenance_maintenance_enabled']);
$page_def[] = config_add_boolean_select('rs_maintenance_omit_search_bar', $lang['rs_maintenance_omit_search_bar']);
$page_def[] = config_add_text_input('rs_maintenance_maintenance_msg', $lang['rs_maintenance_msg']);
$page_def[] = config_add_multi_user_select('rs_maintenance_allowed_users', $lang['rs_maintenance_allowed_users']);

// Do the page generation ritual -- don't change this section.
$upload_status = config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, $upload_status, $page_heading, $page_intro);
include '../../../include/footer.php';