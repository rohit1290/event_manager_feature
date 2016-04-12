<?php

$event_id = get_input("event_id", 0);
$group_id = get_input("group_id", 0);
$event = get_entity($event_id);
$group = get_entity($group_id);

if ($group && $group->canEdit()) {
	$event->container_guid = $group_id;
	$event->save();
	system_message(elgg_echo('event_manager:add_to_group:success'));
}
forward($event->getUrl());
