<?php
/**
*
* @package phpBB Extension - Badge
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace avathar\badge\migrations;

class update_bbcode_alt_text extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\avathar\badge\migrations\update_table');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_badge_bbcode_template'))),
		);
	}

	public function update_badge_bbcode_template()
	{
		$sql = 'SELECT bbcode_id
			FROM ' . BBCODES_TABLE . "
			WHERE LOWER(bbcode_tag) = 'badge='";
		$result = $this->db->sql_query($sql);
		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		if ($row)
		{
			$new_tpl = '<img src="https://img.shields.io/badge/{INTTEXT1}-{INTTEXT2}-{INTTEXT3}.svg" alt="{INTTEXT1} {INTTEXT2}" style="margin-bottom: -5px;" />';

			$sql = 'UPDATE ' . BBCODES_TABLE . '
				SET bbcode_tpl = \'' . $this->db->sql_escape($new_tpl) . '\'
				WHERE bbcode_id = ' . (int) $row['bbcode_id'];
			$this->db->sql_query($sql);
		}
	}
}
