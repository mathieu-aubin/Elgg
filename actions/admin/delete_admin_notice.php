<?php
/**
 * Removes an admin notice.
 */

$guid = (int) get_input('guid');
$notice = get_entity($guid);

if (!$notice instanceof \ElggAdminNotice || !$notice->delete()) {
	return elgg_error_response(elgg_echo('admin:notices:could_not_delete'));
}

return elgg_ok_response();
