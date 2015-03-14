<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
*
*/

namespace dmzx\topstats\acp;

class topstats_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

	//	$user->add_lang('acp/common');
		$this->tpl_name = 'acp_topstats';
		$this->page_title = $user->lang['TS_CONFIG'];
		add_form_key('acp_topstats');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_topstats'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('tsrat_enable', $request->variable('tsrat_enable', 1));
			$config->set('tsrat_number', $request->variable('tsrat_number', 5));
			$config->set('ts_jsscroll', $request->variable('ts_jsscroll', 0));
			$config->set('tsjss_speed', $request->variable('tsjss_speed', 400));
			$config->set('tsjss_interval', $request->variable('tsjss_interval', 4000));
			$config->set('ts_jsscroll_direction', $request->variable('ts_jsscroll_direction', 1));
			$config->set('ts_jsscroll_pause', $request->variable('ts_jsscroll_pause', 1));
			$config->set('ts_jsscroll_navigation', $request->variable('ts_jsscroll_navigation', 1));
			$config->set('ts_ticker_enable', $request->variable('ts_ticker_enable', 0));
			$config->set('tsmvt_enable', $request->variable('tsmvt_enable', 1));
			$config->set('tsmvt_number', $request->variable('tsmvt_number', 5));
			$config->set('tsmrt_enable', $request->variable('tsmrt_enable', 1));
			$config->set('tsmrt_number', $request->variable('tsmrt_number', 5));
			$config->set('tsmau_enable', $request->variable('tsmau_enable', 1));
			$config->set('tsmau_number', $request->variable('tsmau_number', 5));
			$config->set('tsmaf_enable', $request->variable('tsmaf_enable', 1));
			$config->set('tsmaf_number', $request->variable('tsmaf_number', 5));
			$config->set('tslvb_enable', $request->variable('tslvb_enable', 1));
			$config->set('tslvb_number', $request->variable('tslvb_number', 5));
			$config->set('tslru_enable', $request->variable('tslru_enable', 1));
			$config->set('tslru_number', $request->variable('tslru_number', 5));

			$cache->purge('_ts_most_active_users', '_ts_last_visited_bots', '_ts_last_registered_users');

			trigger_error($user->lang['TOPSTATS_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'TS_VERSION'				=> (isset($config['ts_version'])) ? $config['ts_version'] : '',
			'TSRAT_ENABLE'				=> (!empty($config['tsrat_enable'])) ? true : false,
			'TSRAT_NUMBER'				=> (isset($config['tsrat_number'])) ? $config['tsrat_number'] : '',
			'TS_JSSCROLL'				=> (isset($config['ts_jsscroll'])) ? $config['ts_jsscroll'] : '',
			'JSSCROLL_SPEED'			=> (isset($config['tsjss_speed'])) ? $config['tsjss_speed'] : '',
			'JSSCROLL_INTERVAL'			=> (isset($config['tsjss_interval'])) ? $config['tsjss_interval'] : '',
			'TS_JSSCROLL_DIRECTION'		=> (!empty($config['ts_jsscroll_direction'])) ? true : false,
			'TS_JSSCROLL_PAUSE'			=> (!empty($config['ts_jsscroll_pause'])) ? true : false,
			'TS_JSSCROLL_NAVIGATION'	=> (!empty($config['ts_jsscroll_navigation'])) ? true : false,
			'TS_TICKER_ENABLE'			=> (!empty($config['ts_ticker_enable'])) ? true : false,
			'TSMVT_ENABLE'				=> (!empty($config['tsmvt_enable'])) ? true : false,
			'TSMVT_NUMBER'				=> (isset($config['tsmvt_number'])) ? $config['tsmvt_number'] : '',
			'TSMRT_ENABLE'				=> (!empty($config['tsmrt_enable'])) ? true : false,
			'TSMRT_NUMBER'				=> (isset($config['tsmrt_number'])) ? $config['tsmrt_number'] : '',
			'TSMAU_ENABLE'				=> (!empty($config['tsmau_enable'])) ? true : false,
			'TSMAU_NUMBER'				=> (isset($config['tsmau_number'])) ? $config['tsmau_number'] : '',
			'TSMAF_ENABLE'				=> (!empty($config['tsmaf_enable'])) ? true : false,
			'TSMAF_NUMBER'				=> (isset($config['tsmaf_number'])) ? $config['tsmaf_number'] : '',
			'TSLVB_ENABLE'				=> (!empty($config['tslvb_enable'])) ? true : false,
			'TSLVB_NUMBER'				=> (isset($config['tslvb_number'])) ? $config['tslvb_number'] : '',
			'TSLRU_ENABLE'				=> (!empty($config['tslru_enable'])) ? true : false,
			'TSLRU_NUMBER'				=> (isset($config['tslru_number'])) ? $config['tslru_number'] : '',
			'U_ACTION'					=> $this->u_action,
		));
	}

}
