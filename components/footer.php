<?php 
namespace App\Components;

class Footer
{
	private $content = "
		<footer>
			<p>
				by <a href=\"https://github.com/rekky1aws\"> rekkylaws </a>
			</p> 
		</footer>
	";

	public function getContent ()
	{
		return $this->content;
	}
}

?>