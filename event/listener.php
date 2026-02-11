<?php
/**
*
* @package phpBB Extension - Badge
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace avathar\badge\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var string */
	protected $ext_path;

	/** @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param string $ext_path Path to this extension's directory
	* @param \phpbb\template\template $template
	*/
	public function __construct($ext_path, \phpbb\template\template $template)
	{
		$this->ext_path = $ext_path;
		$this->template = $template;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'						=> 'load_language_on_setup',
			'core.posting_modify_template_vars'		=> 'load_badge_presets',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'avathar/badge',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function load_badge_presets($event)
	{
		$presets_file = $this->ext_path . 'config/badge_presets.php';
		$presets = [];

		if (file_exists($presets_file))
		{
			$presets = include $presets_file;
		}

		foreach ($presets as $preset)
		{
			$this->template->assign_block_vars('badge_presets', array(
				'value'	=> $preset['value'],
				'title'	=> $preset['title'],
			));
		}
	}
}
