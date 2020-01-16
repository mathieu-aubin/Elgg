<?php
/**
 * Add bookmark page
 *
 * @package ElggBookmarks
 */

$bookmark_guid = elgg_extract('guid', $vars);
elgg_entity_gatekeeper($bookmark_guid, 'object', 'bookmarks', true);

$bookmark = get_entity($bookmark_guid);

elgg_push_entity_breadcrumbs($bookmark);

$vars = bookmarks_prepare_form_vars($bookmark);

echo elgg_view_page(elgg_echo('edit:object:bookmarks'), [
	'filter_id' => 'bookmarks/edit',
	'content' => elgg_view_form('bookmarks/save', ['prevent_double_submit' => true], $vars),
]);
