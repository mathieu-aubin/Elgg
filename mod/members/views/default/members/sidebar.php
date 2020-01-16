<?php
/**
 * Members sidebar
 */

$params = [
	'method' => 'get',
	'action' => 'members/search',
	'disable_security' => true,
	'prevent_double_submit' => true,
];

$body = elgg_view_form('members/search', $params);

echo elgg_view_module('aside', elgg_echo('members:search'), $body);
