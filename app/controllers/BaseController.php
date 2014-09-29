<?php

use \Laracasts\Commander\CommandBus;
class BaseController extends Controller {

    private $commandBus;

	function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
