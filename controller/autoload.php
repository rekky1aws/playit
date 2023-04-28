<?php 

function loadFiles ($path)
{
	// Scanning files in given pass, returns false if path is not a folder
	$files = scandir($path);

	// If path isn't a folder
	if (!$files) {
		return false;
	}

	foreach ($files as $file) {

		// Excluding folders starting with a .
		if ($file[0] !== '.') {
			
			// If php file, include it
			if (str_contains($file, ".php")) {
				include_once $path . "/" . $file;
			}

			// If something else, recursively include php content
			else {
				loadFiles($path . "/" . $file);
			}
		}
	}
}

loadFiles(".");


?>