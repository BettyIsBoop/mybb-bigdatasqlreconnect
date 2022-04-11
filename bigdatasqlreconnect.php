<?php

/**
 * @version : 0.1.0
 * Changelog:
 * 0.1.0 : disconnect and reconnect in parse_message_end
 */

$plugins->add_hook('parse_message_end', 'bigdatasqlreconnect_parse_message_end');

function bigdatasqlreconnect_parse_message_end($message)
{
    global $db,$mybb;
    $db->close();
    $db->connect($mybb->config['database']);
}


function bigdatasqlreconnect_info() {
	return array(
		'name'          => 'Big data can broke DB',
		'description'   => 'Close and reconect to MYSQL.',
		'compatibility' => '18*',
		'author'        => 'Betty',
		'authorsite'    => 'https://example.net/',
		'version'       => '1.0.0',
		'codename'      => 'bigdatasqlreconnect',
	);
}
