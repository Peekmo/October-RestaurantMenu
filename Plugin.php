<?php

namespace Peekmo\RsMenu;

use Backend;

class Plugin extends \System\Classes\PluginBase
{
	public function pluginDetails()
	{
		return [
			'name' => 'Restaurant Menu Plugin',
			'description' => 'Provides some tools to manage a restaurant menu',
			'author' => 'Axel Anceau (Peekmo)',
			'icon' => 'icon-leaf'
		];
	}

	public function registerComponents()
	{
		return [
			'Peekmo\RestaurantMenu\Components\RestaurantMenu' => 'peekmo_rsmenu'
		];
	}

	public function registerPermissions()
	{
		return [
			'peekmo.rsmenu' => ['label' => 'Manage menus for the restaurant']
		];
	}

	public function registerNavigation()
	{
		return [
			'Restaurant' => [
				'label' => 'Restaurant',
				'url' => Backend::url('peekmo/rsmenu'),
				'permissions' => ['peekmo.rsmenu'],
				'order' => 500,
				'sideMenu' => [
					'menus' => [
						'label' => 'Menus',
						'url'   => Backend::url('peekmo/rsmenu/menus'),
						'permissions' => ['peekmo.rsmenu']
					],
					'offers' => [
						'label' => 'Special offers',
						'url'   => Backend::url('peekmo/rsmenu/offers'),
						'permissions' => ['peekmo.rsmenu']
					]
				]
			]
		];
	}
}
