<?php
/**
*
* @package phpBB Extension - Top Stats
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author Stoker - http://www.phpbb3bbcodes.com
* @Italian translation by systemcrack http://morfeuscommunity.biz
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
	'MOST_VIEWED'				=> 'Argomenti più visti',
	'MOST_REPLIED'				=> 'Argomenti più risposti',
	'NEWEST_TOPICS'				=> 'Ultimi argomenti',
	'NEWEST_POSTS'				=> 'Ultimi messaggi',
	'RECENT_ACTIVE'				=> 'Discussioni recenti attive',
	'MOST_ACTIVE_USERS'			=> 'Utenti più attivi',
	'JOINED_US'					=> 'Unisciti a noi',
	'MOST_ACTIVE_FORUMS'		=> 'Forum più attivo',
	'PREVIOUS_SCROLL'			=> 'Precedente',
	'NEXT_SCROLL'				=> 'Nuovo',
	'START_SCROLL'				=> 'Avvia',
	'STOP_SCROLL'				=> 'Stop',
	'LAST_REGISTERED_USERS'		=> 'Ultimi utenti registrati',
	'LAST_VISITED_BOTS'			=> 'Ultimi bots in visita',
	
	'TOP_STATS'								=> 'Top Stats',
	'TOPSTATS_SAVED'						=> 'Impostazioni Top Stats salvate',
	'TS_VERSION'							=> 'Versione',
	'TS_DONATE'							    => 'Autore <a href="http://www.phpbb3bbcodes.com"><strong>Stoker</strong></a>. Estensione creata da <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'TS_CONFIG'								=> 'Configurazione',
	'TS_RECENT_SETTINGS'					=> 'Impostazioni argomenti attivi recenti',
	'TS_RECENT_ENABLE'						=> 'Abilita argomenti attivi recenti',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Attiva o disattiva la visualizzazione del blocco Argomenti recenti',	
	
	'TSRAT_NUMBER'							=> 'Discussioni recenti attive',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Numero degli Argomenti recenti attivi da visualizzare',
	
	'TS_JSSCROLL'							=> 'Scorrimento Jquery',
	'TS_JSSCROLL_EXPLAIN'					=> 'Attiva o disattiva l’utilizzo dello scorrimento jquery per le Discusioni recenti attive<br />Si prega di notare che questa funzione deve essere disabilitato se si utilizza Jquery Ticker',
	'TS_JSSCROLL_SPEED'						=> 'Velocità scorrimento Jquery',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'La velocità di scorrimento in millisecondi',
	'TS_JSSCROLL_INTERVAL'					=> 'Intervallo scorrimento Jquery',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Il tempo tra uno scorrimento e l’altro in millisecondi',
	'TS_JSSCROLL_DIRECTION'					=> 'Direzione scorrimento Jquery',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'La direzione dello scorrimento jquery',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Verso il basso',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Verso l’alto',
	'TS_JSSCROLL_PAUSE'						=> 'Pausa scorrimento Jquery',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Quando è abilitato lo scorrimento è in pausa quando si passa sopra a Discussioni Recenti Attive',
	'TS_JSSCROLL_NAVIGATION'				=> 'Percorso scorrimento Jquery',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Attiva o disattiva la navigazione JSSCroll per Discussione Recenti Attivi',
	'TS_TICKER_ENABLE'						=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Attivare o disattivare il Jquery Ticker per Discussione Recenti Attivi<br />Si prega di notare che questa funzione deve essere disabilitata se si utilizza lo scorrimento Jquery',
	
	'TS_MOSTVIEWED_SETTINGS'				=> 'Impostazioni Argomenti più visti',
	'TS_MOSTVIEWED_ENABLE'					=> 'Abilita Argomenti più visti',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Attiva o disattiva la visualizzazione del blocco Argomenti più visti',
	'TS_MOSTVIEWED_NUMBER'					=> 'Argomenti più visti',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Numero degli Argomenti più visti da visualizzare',
	
	'TS_MOSTREPLIED_SETTINGS'				=> 'Impostazioni Argomenti più risposti',
	'TS_MOSTREPLIED_ENABLE'					=> 'Abilita Argomenti più risposti',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Attiva o disattiva la visualizzazione del blocco Argomenti più risposti',
	'TS_MOSTREPLIED_NUMBER'					=> 'Argomenti più risposti',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Numero degli Argomenti più risposti da visualizzare',
	
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Impostazioni utenti più attivi',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Abilita utenti più attivi',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Attiva o disattiva la visualizzazione del blocco utenti più attivi',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Utenti più attivi',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Numero degli utenti più attivi da visualizzare',
	
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Impostazioni forum più attivo',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Abilita Forum più attivi',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Attiva o disattiva la visualizzazione del blocco Forum più attivi',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Forum più attivi',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Numero dei Forum più attivi da visualizzare',
	
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Impostazioni ultimi bot in visita',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Abilita ultimi bot in visita',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Attiva o disattiva la visualizzazione del blocco ultimi bot in visita',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Ultimi bot in visita',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Numero degli Ultimi bot in visita da visualizzare',
	
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Impostazioni ultimi utenti registarati',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Abilita ultimi utenti registrati',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Attiva o disattiva la visualizzazione del blocco ultimi utenti registrati',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Ultimi utenti registrati',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Numero degli Ultimi utenti registrati da visualizzare',
));
