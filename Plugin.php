<?php

namespace Peekmo\RestaurantMenu;

class Plugin extends \System\Classes\PluginBase
{
	public function pluginDetails() 
	{
		return [
			'name' => 'Restaurant Menu Plugin',
			'description' => 'Provides some tools to manage a restaurant menu',
			'author' => 'Axel Anceau (Peekmo)'
		];
	}

	public function registerComponents()
	{
		return [
			'Peekmo\RestaurantMenu\Components\RestaurantMenu' => 'peekmo_rsmenu'
		];
	}
}
