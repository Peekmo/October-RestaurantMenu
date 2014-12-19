<?php

namespace Peekmo\RestaurantMenu\Components;

class RestaurantMenu extends Cms\Classes\ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Restaurant menu',
			'description' => 'Display menus registered'
		];
	}
}
