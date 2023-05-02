<?php 

function loadFiles ($path)
{
	// Checking if path is a folder
	if (is_dir($path)) {
		// Scanning files in given pass, returns false if path is not a folder
		$files = scandir($path);

		foreach ($files as $file) {
			// Excluding folders starting with a .
			if ($file[0] !== '.') {
				loadFiles($path . "/" . $file);
			}
		}

	} else {
		// If php file, include it
		if (str_contains($path, ".php")) {
			include_once $path;
		}
	}
}

// echo "<pre>";
loadFiles(".");
// echo "</pre>";


?>