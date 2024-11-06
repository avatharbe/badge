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
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'BBCODE_BADGE_HELP'			=> '[badge]SUBJECT-STATUS-COLOR[/badge]',
		'BADGE_BBCODES'				=> 'Badge bbCode',
		'CHANGELOG'					=> 'changelog-v1.0.0-a808f3',
		'CHANGELOG_TITLE'			=> 'Changelog',
		'CUSTOM'					=> 'SUBJECT-STATUS-COLOR',
		'CUSTOM_TITLE'				=> 'Custom',
		'LICENSE'					=> 'license-GPLv2-blue',
		'LICENSE_TITLE'				=> 'License GPLv2',
		'VERSION_100'				=> 'version-1.0.0-FFFF00',
		'VERSION_100_TITLE'			=> 'Version 1.0.0',
		'VERSION_101'				=> 'version-1.0.1-f36808',
		'VERSION_101_TITLE'			=> 'Version 1.0.1',
		'VERSION_200'				=> 'version-2.0.0-ff5733',
		'VERSION_200_TITLE'			=> 'Version 2.0.0',
		'VERSION_300'				=> 'version-3.0.0-ff5733',
		'VERSION_300_TITLE'			=> 'Version 3.0.0',
		'VERSION_400'				=> 'version-4.0.0-ff5733',
		'VERSION_400_TITLE'			=> 'Version 4.0.0',	
	)
);
