<?php
/**
*
* @package phpBB Extension - Badge
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ' » " " …
//

$lang = array_merge(
	$lang, array(
		'BBCODE_BADGE_HELP'			=> '[badge]SUBJECT-STATUS-COLOR[/badge]',
		'BADGE_BBCODES'				=> 'Badge bbCode',
		'BADGE_PRESET_CHANGELOG'	=> 'Changelog',
		'BADGE_PRESET_CUSTOM'		=> 'Custom',
		'BADGE_PRESET_LICENSE'		=> 'License GPLv2',
		'BADGE_PRESET_V100'			=> 'Version 1.0.0',
		'BADGE_PRESET_V101'			=> 'Version 1.0.1',
		'BADGE_PRESET_V200'			=> 'Version 2.0.0',
		'BADGE_PRESET_V300'			=> 'Version 3.0.0',
		'BADGE_PRESET_V400'			=> 'Version 4.0.0',
		'BADGE_PRESET_PHPBB33'		=> 'phpBB 3.3',
		'BADGE_PRESET_STABLE'		=> 'Stable',
		'BADGE_PRESET_BETA'			=> 'Beta',
		'BADGE_PRESET_BUILD'		=> 'Build Passing',
	)
);
