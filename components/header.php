<?php 
namespace App\Components;

class Header
{
	private $content = "
		<header>
			<h1> Playit </h1>
		</header>
	";

	public function getContent ()
	{
		return $this->content;
	}
}

?>