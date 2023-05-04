<?php 

class PlayerControls
{
	private $content = "
		<div class=\"playerControls\">
			<button class=\"shuffle\"> </button>
			<button class=\"previousTrack\"> </button>
			<button class=\"playPause\"> </button>
			<button class=\"nextTracb\"> </button>
			<button class=\"loop\"> </button>
		</div>
	";

	public function getContent ()
	{
		return $this->content;
	}
}

?>