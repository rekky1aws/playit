<?php 
namespace App\View;

include_once "playerControls.php";

class Player {

	private $controls;

	public function getControls ()
	{
		$this->controls = new PlayerControls ();
		return $this->controls->getContent();
	}
}

?>