<?php

namespace Elgg\Pages;

/**
 * @group Router
 * @group PagesRoutes
 */
class RouteResponseTest extends \Elgg\Plugins\Integration\RouteResponseTestCase {

	public function getSubtype() {
		return 'page';
	}
	
	public function groupRoutesProtectedByToolOption() {
		return [
			[
				'route' => "collection:object:{$this->getSubtype()}:group",
				'tool' => 'pages',
			],
		];
	}
}
