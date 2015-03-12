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
	'MOST_VIEWED'				=> 'Sujets les plus vus',
	'MOST_REPLIED'				=> 'Sujets les plus répondus',
	'NEWEST_TOPICS'				=> 'Derniers sujets',
	'NEWEST_POSTS'				=> 'Derniers messages',
	'RECENT_ACTIVE'				=> 'Sujets Actifs Les Plus Récents',
	'MOST_ACTIVE_USERS'			=> 'Membres les plus actifs',
	'JOINED_US'					=> 'Nous à Rejoint',
	'MOST_ACTIVE_FORUMS'		=> 'Forums les plus actifs',
	'PREVIOUS_SCROLL'			=> 'Précédent',
	'NEXT_SCROLL'				=> 'Suivant',
	'START_SCROLL'				=> 'Démarrer',
	'STOP_SCROLL'				=> 'Arrêter',
	'LAST_REGISTERED_USERS'		=> 'Derniers membres enregistrés',
	'LAST_VISITED_BOTS'			=> 'Dernière visite des robots',
	
	'TOP_STATS'								=> 'Top Statistiques',
	'TOPSTATS_SAVED'						=> 'Le paramètres du top statistique ont été enregistrés',
	'TS_VERSION'							=> 'Version',
	'TS_DONATE'							=> 'Author <a href="http://www.phpbb3bbcodes.com"><strong>Stoker</strong></a>. Extension made by <a href="http://www.dmzx-web.net"><strong>dmzx</strong></a>',
	'TS_CONFIG'								=> 'Configuration',
	'TS_RECENT_SETTINGS'					=> 'Paramètres des sujets actifs récents',
	'TS_RECENT_ENABLE'						=> 'Activer les sujets actifs récents',
	'TS_RECENT_ENABLE_EXPLAIN'				=> 'Activer ou désactiver l’affichage de la partie sujets actifs récents',
	
'TSRAT_NUMBER'							=> 'Sujets Actifs Récents',
	'TSRAT_NUMBER_EXPLAIN'					=> 'Nombre de Sujets Actifs Récents a afficher',
	
	'TS_JSSCROLL'							=> 'Faire défiler',
	'TS_JSSCROLL_EXPLAIN'					=> 'Activer ou désactiver l’utilisation du défilement des Sujets Actifs Récents<br />S’il vous plaît noter que cette fonctionnalité doit être désactivée si vous utilisez Jquery Ticker',
	'TS_JSSCROLL_SPEED'						=> 'Vitesse de défilement',
	'TS_JSSCROLL_SPEED_EXPLAIN'				=> 'La vitesse de défilement est en millisecondes',
	'TS_JSSCROLL_INTERVAL'					=> 'Interval de défilement',
	'TS_JSSCROLL_INTERVAL_EXPLAIN'			=> 'Le temps entre le défilement en millisecondes',
	'TS_JSSCROLL_DIRECTION'					=> 'Direction de défilement',
	'TS_JSSCROLL_DIRECTION_EXPLAIN'			=> 'La direction de défilement',
	'TS_JSSCROLL_DIRECTION_DOWN'			=> 'Bas',
	'TS_JSSCROLL_DIRECTION_UP'				=> 'Haut',
	'TS_JSSCROLL_PAUSE'						=> 'Pause du défilement',
	'TS_JSSCROLL_PAUSE_EXPLAIN'				=> 'Lorsqu’il est activé le défilement est en pause lorsque vous survolez les Sujets Actifs Récents',
	'TS_JSSCROLL_NAVIGATION'				=> 'Mettre la barre de navigation',
	'TS_JSSCROLL_NAVIGATION_EXPLAIN'		=> 'Activer ou désactiver la navigation JSSCroll pour les Sujets Actifs Récents',
	'TS_TICKER_ENABLE'						=> 'Jquery Ticker',
	'TS_TICKER_ENABLE_EXPLAIN'				=> 'Activer ou désactiver Jquery Ticker pour les Sujets Actifs Récents<br />S’il vous plaît noter que cette fonctionnalité doit être désactivée si vous utilisez Jquery Scroll',
	
	'TS_MOSTVIEWED_SETTINGS'				=> 'Paramètres des sujets les plus vus',
	'TS_MOSTVIEWED_ENABLE'					=> 'Activer les sujets les plus vus',
	'TS_MOSTVIEWED_ENABLE_EXPLAIN'			=> 'Activer ou désactiver l’affichage des sujets les plus vus',
	'TS_MOSTVIEWED_NUMBER'					=> 'Sujets les plus vus',
	'TS_MOSTVIEWED_NUMBER_EXPLAIN'			=> 'Nombres de sujets les plus vus a afficher',
	
	'TS_MOSTREPLIED_SETTINGS'				=> 'Paramètres des sujets les plus répondus',
	'TS_MOSTREPLIED_ENABLE'					=> 'Activer les sujets les plus répondus',
	'TS_MOSTREPLIED_ENABLE_EXPLAIN'			=> 'Activer ou désactiver l’affichage des sujets les plus répondus',
	'TS_MOSTREPLIED_NUMBER'					=> 'Sujets les plus répondus',
	'TS_MOSTREPLIED_NUMBER_EXPLAIN'			=> 'Nombres de sujets les plus répondus a afficher',
	
	'TS_MOSTACTIVEUSER_SETTINGS'			=> 'Paramètres des membres les plus actifs',
	'TS_MOSTACTIVEUSER_ENABLE'				=> 'Activer les membres les plus actifs',
	'TS_MOSTACTIVEUSER_ENABLE_EXPLAIN'		=> 'Activer ou désactiver l’affichage des membres les plus actifs',
	'TS_MOSTACTIVEUSER_NUMBER'				=> 'Membres les plus actifs',
	'TS_MOSTACTIVEUSER_NUMBER_EXPLAIN'		=> 'Nombres de membres les plus actifs a afficher',
	
	'TS_MOSTACTIVEFORUM_SETTINGS'			=> 'Paramètres des forums les plus actifs',
	'TS_MOSTACTIVEFORUM_ENABLE'				=> 'Activer les forums les plus actifs',
	'TS_MOSTACTIVEFORUM_ENABLE_EXPLAIN'		=> 'Activer ou désactiver l’affichage des forums les plus actifs',
	'TS_MOSTACTIVEFORUM_NUMBER'				=> 'Forums les plus actifs',
	'TS_MOSTACTIVEFORUM_NUMBER_EXPLAIN'		=> 'Nombres de forums les plus actifs a afficher',
	'TS_LASTVISITEDBOT_SETTINGS'			=> 'Paramètres des dernières visites de robots',
	'TS_LASTVISITEDBOT_ENABLE'				=> 'Activer la dernière visite des robots',
	'TS_LASTVISITEDBOT_ENABLE_EXPLAIN'		=> 'Activer ou désactiver l’affichage de la dernière visite des robots',
	'TS_LASTVISITEDBOT_NUMBER'				=> 'Dernière visite des robots',
	'TS_LASTVISITEDBOT_NUMBER_EXPLAIN'		=> 'Nombre de dernière visite de robot a afficher',	
	'TS_LASTREGISTEREDUSER_SETTINGS'		=> 'Paramètres des derniers membres enregistrés',
	'TS_LASTREGISTEREDUSER_ENABLE'			=> 'Activer les derniers membres enregistrés',
	'TS_LASTREGISTEREDUSER_ENABLE_EXPLAIN'	=> 'Activer ou désactiver l’affichage des derniers membres enregistrés',
	'TS_LASTREGISTEREDUSER_NUMBER'			=> 'Derniers membres enregistrés',
	'TS_LASTREGISTEREDUSER_NUMBER_EXPLAIN'	=> 'Nombre de dernier membres enregistrés a afficher',
));