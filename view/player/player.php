<?php 
include_once "playerControls.php";

class Player {

	private $controls = new PlayerControls ();

	public function getControls ()
	{
		return $this->controls;
	}
}

?>