<?php
class WikiMigrator {

	/**
	*	@param $localPath teda cesta kde mas dokuwiki nainstalovanu 
	*/
	
	
	public static function Transform($localPath,$serverPath) {
	
		$dir = $localPath."\data\pages";
	
		$zoznam = self::find_all_files($dir);
		for($i = 0 ; $i < sizeof($zoznam) ; $i++ ){
			$pagePath = substr(strrchr($zoznam[$i],"\pages/"),7,-4);
			for($j = 0 ; $j < strlen($pagePath) ; $j++ )
				if($pagePath[$j] == '/')
					$pagePath[$j] = ':';
			
			//echo "************".$pagePath."************<br>";
			//echo file_get_contents("$serverPath$pagePath&do=export_xhtml");
			$content = file_get_contents("$serverPath$pagePath&do=export_xhtml");
			//napr. DB::insertZaznam($pagePath, $content)
		}
		
	
		
		
	}
	
	private static function find_all_files($dir) 
	{ 
		$root = scandir($dir); 
		foreach($root as $value) 
		{ 
			if($value === '.' || $value === '..') {continue;} 
			if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;} 
			foreach(self::find_all_files("$dir/$value") as $value) 
			{ 
				$result[]=$value; 
			} 
		} 
		return $result; 
	} 
	
}
?>
