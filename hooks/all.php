<?php

function HookRs_maintenanceAllReplacesitetextloader(){
	global $rs_maintenance_maintenance_enabled, $usergroup, $baseurl;
	if($rs_maintenance_maintenance_enabled && $usergroup != 3){
		//TODO: make this more hack-safe, without js if possible
		echo '<script type="text/javascript">window.location.href="' . $baseurl . '/plugins/rs_maintenance/pages/maintenance.php";</script>';
	}
}