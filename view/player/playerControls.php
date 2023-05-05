<?php 
namespace App\View;

class PlayerControls
{
	private $content = "
		<div class=\"playerControls\">
			<button class=\"playerButton shuffle\"> </button>
			<button class=\"playerButton previousTrack\"> </button>
			<button class=\"playerButton playPause\"> </button>
			<button class=\"playerButton nextTracb\"> </button>
			<button class=\"playerButton loop\"> </button>
		</div>
	";

	public function getContent ()
	{
		return $this->content;
	}
}

?>