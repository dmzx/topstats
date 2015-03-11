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

class topstats_data extends \phpbb\db\migration\migration
{
	
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('tsrat_enable', 1)),
			array('config.add', array('tsmvt_enable', 1)),
			array('config.add', array('tsmrt_enable', 1)),
			array('config.add', array('tsrat_number', 5)),
			array('config.add', array('tsmvt_number', 5)),
			array('config.add', array('tsmrt_number', 5)),
			array('config.add', array('ts_jsscroll', 0)),
			array('config.add', array('tsjss_speed', 400)),
			array('config.add', array('tsjss_interval', 4000)),
			array('config.add', array('tsmau_enable', 1)),
			array('config.add', array('tsmau_number', 5)),	
            array('config.add', array('tsmaf_enable', 1)),	
			array('config.add', array('ts_jsscroll_direction', 1)),
			array('config.add', array('ts_jsscroll_pause', 1)),
			array('config.add', array('ts_jsscroll_navigation', 1)),
			array('config.add', array('ts_ticker_enable', 0)),
			array('config.add', array('tslvb_enable', 1)),
			array('config.add', array('tslvb_number', 5)),
			array('config.add', array('tslru_enable', 1)),
			array('config.add', array('tslru_number', 5)),
			array('config.add', array('ts_version', '1.0.0')),
		);
	}
}