<?php
require_once 'database.php';
function get_data($q = null){
	$results = [];
	if($q != null){
		$db = new Database();
		if($db->query($q)){
			$results = $db->fetch();
			$db->close();
		}
	}
	return $results;
}
