<?php 
// namespace App;



class Head {
	private $content = "
		<link rel=\"stylesheet\" type=\"text/css\" href=\"/style/main.css\">
		<script type=\"text/javascript\" src=\"/script/app.js\" defer></script>
	";

	public function getContent ()
	{
		return $content;
	}
}

?>