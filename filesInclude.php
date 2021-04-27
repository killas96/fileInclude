function filesInclude($dir, $pattern) {
	$scan_dir = array_diff(scandir($dir), array('..', '.'));	
	foreach($scan_dir as $res){
		#echo '<pre style="display:none;">';print_r($dir . DIRECTORY_SEPARATOR . $res);echo '</pre>';
		if (!is_dir($dir . DIRECTORY_SEPARATOR . $res) && stripos($res, $pattern) !== false)
			require_once($dir . DIRECTORY_SEPARATOR . $res);
	}
}
