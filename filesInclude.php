function filesInclude($dir, $pattern) {
	$scan_dir = array_diff(scandir($dir), array('..', '.'));	
	foreach($scan_dir as $res){
		if (!is_dir($dir . DIRECTORY_SEPARATOR . $res) && stripos($res, $pattern) !== false)
			require_once($dir . DIRECTORY_SEPARATOR . $res);
	}
}
