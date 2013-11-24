<?php

function HookRs_maintenanceAllReplacesitetextloader(){
	global $rs_maintenance_maintenance_enabled, $usergroup, $baseurl;
	if($rs_maintenance_maintenance_enabled && $usergroup != 3){
		echo '<meta http-equiv="refresh" content="0; URL='.$baseurl . '/plugins/rs_maintenance/pages/maintenance.php">';
		exit;
	}
	return false;
}