<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\topstats\migrations;

class topstats_module extends \phpbb\db\migration\migration
{
	
	public function update_data()
	{
		return array(
		    array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'TOP_STATS')),
			array('module.add', array(
			'acp', 'TOP_STATS', array(
			'module_basename'	=> '\dmzx\topstats\acp\topstats_module', 'modes'	  => array('configuration'),	
		    ),
			)),
		);
	}
}