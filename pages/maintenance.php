<?php
include '../../../include/db.php';
include '../../../include/authenticate.php';// if (!checkperm('a')) {exit ($lang['error-permissiondenied']);}
include '../../../include/general.php';
require_once(__DIR__ . '/../../../include/header.php');
//global $pagename;
//$pagename = 'maintenance.php';
?>

<center><?php echo $rs_maintenance_maintenance_msg; ?></center>
<?php

/*
* TODO: include some rs design (header e.g.),
*	add maintenance message, maybe configurable via setup.php
*
*/