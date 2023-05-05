<?php 
namespace App\Components;

class Head
{
	private $content = "
		<link rel=\"stylesheet\" type=\"text/css\" href=\"/style/main.css\">
		<link rel=\"stylesheet\" type=\"text/css\" href=\"/style/player.css\">
		<script type=\"text/javascript\" src=\"/script/app.js\" defer></script>
	";

	private $debug_content = "
		<link rel=\"stylesheet\" type=\"text/css\" href=\"/style/debug.css\">
	";

	public function getContent ()
	{
		if (DEBUG) {
			return $this->content . "\n" . $this->debug_content;
		} else {
			return $this->content;
		}
	}
}

?>