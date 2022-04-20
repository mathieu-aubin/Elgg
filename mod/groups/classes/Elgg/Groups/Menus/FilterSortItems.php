<?php

namespace Elgg\Groups\Menus;

use Elgg\Menu\MenuItems;

/**
 * Add group membership sort_by menu items to a filter menu
 *
 * @since 4.2
 */
class FilterSortItems {
	
	/**
	 * Register sorting menu items based on the relationship 'member'
	 *
	 * @param \Elgg\Hook $hook 'register', 'menu:filter<:some filter_id>'
	 *
	 * @return MenuItems|null
	 */
	public static function registerMembershipSorting(\Elgg\Hook $hook): ?MenuItems {
		
		if (!(bool) $hook->getParam('filter_sorting', true)) {
			// sorting is disabled for this menu
			return null;
		}
		
		/* @var $result MenuItems */
		$result = $hook->getValue();
		
		// add sorting based on relationship time_created
		$result[] = \ElggMenuItem::factory([
			'name' => 'sort:relationship:desc',
			'icon' => 'sort-numeric-down-alt',
			'text' => elgg_echo('groups:menu:sort:member'),
			'href' => elgg_http_add_url_query_elements(current_page_url(), [
				'sort_by' => [
					'property' => 'member',
					'property_type' => 'relationship',
					'direction' => 'desc',
				],
			]),
			'parent_name' => 'sort:parent',
			'priority' => 200,
		]);
		
		return $result;
	}
}
