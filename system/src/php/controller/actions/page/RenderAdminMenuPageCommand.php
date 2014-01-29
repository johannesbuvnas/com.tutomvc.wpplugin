<?php
namespace tutomvc;

class RenderAdminMenuPageCommand extends ActionCommand
{
	function __construct()
	{
		parent::__construct( ActionCommand::RENDER_ADMIN_MENU_PAGE );
	}

	function execute()
	{
		$currentScreen = get_current_screen();
		
		foreach($this->getFacade()->adminMenuPageCenter->getMap() as $item)
		{
			if($item->getName() == $currentScreen->id)
			{
				if($item->getMediator())
				{
					$item->getMediator()->setAdminMenuPage( $item );
					$item->getMediator()->render();
				}

				break;
			}
		}
	}
}