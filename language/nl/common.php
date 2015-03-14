<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
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

$lang = array_merge($lang, array(
	'MOST_VIEWED'				=> 'Meest bekeken topics',
	'MOST_REPLIED'				=> 'Meest beantwoorde topics',
	'NEWEST_TOPICS'				=> 'Laatste Topics',
	'NEWEST_POSTS'				=> 'Laatste Posts',
	'RECENT_ACTIVE'				=> 'Recente actieve Topics',
	'MOST_ACTIVE_USERS'			=> 'Meest actieve gebruikers',
	'JOINED_US'					=> 'Toegetreden tot ons',
	'MOST_ACTIVE_FORUMS'		=> 'Meest actieve forums',
	'PREVIOUS_SCROLL'			=> 'Vorig',
	'NEXT_SCROLL'				=> 'Volgende',
	'START_SCROLL'				=> 'Start',
	'STOP_SCROLL'				=> 'Stop',
	'LAST_REGISTERED_USERS'		=> 'Laatste geregistreerde gebruikers',
	'LAST_VISITED_BOTS'			=> 'Laatst bezochte bots',

	'TOP_STATS'								=> 'Top Stats',
	'TOPSTATS_SAVED'						=> 'Top Stats instellingen zijn opgeslagen',
	'TS_VERSION'							=> 'Versie',
	'TS_DONATE'							=> 'Auteur <a href="http://www.phpbb3bbcodes.com"><strong>Stoker</strong></a>. Deze extensie is gemaakt door <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'TS_CONFIG'								=> 'Configuratie',
	'TS_RECENT_SETTINGS'					=> 'Instellingen recent actieve topics',
	'TS_RECENT_ENABLE'						=> 'Inschakelen recent actieve topics',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'In of Uitschakelen van de recent actieve topics',

	'TSRAT_NUMBER'							=> 'Recent actieve topics',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Aantal getoonde berichten van de recent actieve topics',

	'TS_JSSCROLL'							=> 'Jquery Scroll',
	'TS_JSSCROLL_EXPLAIN'					=> 'In of Uitschakelen om gebruik te maken van de jquery scrolling recent Aactieve topics<br />Als je een Jquery Ticker gebruikt, moet je deze mogelijkheid uitschakelen',
	'TS_JSSCROLL_SPEED'						=> 'Jquery Scroll Snelheid',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'De snelheid van de scrooling in milliseconds',
	'TS_JSSCROLL_INTERVAL'					=> 'Jquery Scroll Interval',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Tijd tussen de scrolling in milliseconds',
	'TS_JSSCROLL_DIRECTION'					=> 'Jquery Scroll Richting',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'De richting van de jquery scrolling',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'naar beneden',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'naar boven',
	'TS_JSSCROLL_PAUSE'						=> 'Jquery Scroll Pause',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Indien ingeschakeld, de scrolling wordt gepauzeerd als je met de muis over recent active topics beweegt',
	'TS_JSSCROLL_NAVIGATION'				=> 'Jquery Scroll Navigatie',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'In of Uitschakelen van JSSCroll navigatie van de recent active topics',
	'TS_TICKER_ENABLE'						=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'In of Uitschakelen van de Jquery Ticker voor recent active topics<br />Als je een Jquery Scroll gebruikt, moet je deze mogelijkheid uitschakelen',

	'TS_MOSTVIEWED_SETTINGS'				=> 'Meest bekeken topics instellingen',
	'TS_MOSTVIEWED_ENABLE'					=> 'Inschakelen meest bekeken topics',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'In of Uitschakelen van de meest bekeken topics',
	'TS_MOSTVIEWED_NUMBER'					=> 'Meest bekeken topics',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Aantal getoonde berichten van de meest bekeken topics',

	'TS_MOSTREPLIED_SETTINGS'				=> 'Meest beantwoorde topics instellingen',
	'TS_MOSTREPLIED_ENABLE'					=> 'Inschakelen meest beantwoorde topics',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'In of Uitschakelen van de meest beantwoorde topics',
	'TS_MOSTREPLIED_NUMBER'					=> 'Meest beantwoorde topics',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Aantal getoonde berichten van de meest bantwoorde topics',

	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Meest actieve gebruikers instellingen',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Inschakelen meest actieve gebruikers',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'In of Uitschakelen van de meest actieve gebruikers',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Meest actieve gebruikers',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Aantal getoonde berichten van de meest actieve gebruikers',

	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Meest actieve forums instellingen',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Inschakelen meest actieve forums',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'In of Uitschakelen van de meest actieve forums',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Meest actieve forums',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Aantal getoonde berichten van de meest actieve forums',

	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Laatst bezochte Bots instellingen',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Inschakelen laatst bezochte Bots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'In of Uitschakelen van de laatst bezochte Bots',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Laatst bezochte Bots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Aantal getoonde berichten van de laatst bezochte Bots',

	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Laatst geregistreerde gebruikers instellingen',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Inschakelen laatst geregistreerde gebruikers',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'In of Uitschakelen van de laatst geregistreerde gebruikers',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Laatst geregistreerde gebruikers',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Aantal getoonde berichten van de laatst geregistreerde gebruikers',
));
