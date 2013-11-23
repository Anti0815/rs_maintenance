<?php

function HookRs_maintenanceAllReplacesitetextloader(){
	global $rs_maintenance_maintenance_enabled, $usergroup, $baseurl;
	if($rs_maintenance_maintenance_enabled && $usergroup != 3){
		//echo '<script type="text/javascript">window.location.href="' . $baseurl . '/plugins/rs_maintenance/pages/maintenance.php";</script>';
		echo '<meta http-equiv="refresh" content="0; URL='.$baseurl . '/plugins/rs_maintenance/pages/maintenance.php">';
	}
}