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

function showMaintenance(){
	global $rs_maintenance_maintenance_enabled, $usergroup;
	return $rs_maintenance_maintenance_enabled && $usergroup != 3;
}

function onMaintenancePage(){
	return strpos($_SERVER{'PHP_SELF'}, 'rs_maintenance/pages/maintenance.php') !== false;
}