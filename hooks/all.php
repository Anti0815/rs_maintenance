<?php

function HookRs_maintenanceAllReplacesitetextloader(){
	global $baseurl;
	
	if(showMaintenance() && !onMaintenancePage()){
		echo '<meta http-equiv="refresh" content="0; URL='.$baseurl . '/plugins/rs_maintenance/pages/maintenance.php">';
		exit;
	}
	return false;
}

function HookRs_maintenanceAllModifyomitsearchbarpages(){
	global $rs_maintenance_omit_search_bar;
	if(onMaintenancePage() && $rs_maintenance_omit_search_bar){
		return array('maintenance');
	}
	return false;
}

function HookRs_maintenanceAllHeadertop(){
	global $lang, $rs_maintenance_maintenance_enabled;
	if($rs_maintenance_maintenance_enabled){
		echo '<center><div>' . $lang['rs_maintenance_header_string'] . '</div></center>';
	}
}

// END HOOKS

function showMaintenance(){
	global $rs_maintenance_maintenance_enabled, $rs_maintenance_allowed_users,
		$usergroup, $userref;
	
	return $rs_maintenance_maintenance_enabled && $usergroup != 3
		&& !in_array($userref, $rs_maintenance_allowed_users);
}

function onMaintenancePage(){
	return strpos($_SERVER{'PHP_SELF'}, 'rs_maintenance/pages/maintenance.php') !== false;
}