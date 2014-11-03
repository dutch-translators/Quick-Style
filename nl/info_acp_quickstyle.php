<?php

/**
*
* @package Quick Style [Dutch]
* @copyright (c) 2014 PayBas
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
* Based on the original Prime Quick Style by Ken F. Innes IV (primehalo)
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

$lang = array_merge($lang, array(
	'QUICK_STYLE'						=> 'Quick Style',
	'QUICK_STYLE_EXPLAIN'				=> 'Voegt een stijl dropdown box toe aan de header van elke pagina, zodat je snel van stijl kan wisselen. Gebaseerd op het originele Prime Quick Style van primehalo.',
	'QUICK_STYLE_SETTINGS'				=> 'Quick Style instellingen',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Gebruik standaard template locatie',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'Standaard zal de Quick Style extensie, de stijl-verwisselaar rechts van de broodkruimel navigatie in de header plaatsen. Deze optie op "nee" instellen geeft je de mogelijkheid om de quickstyle_event op zelf uitgekozen plaats te plaatsen.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Sta gasten toe om van stijl te veranderen',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Deze instelling staat gasten toe om van stijl te wisselen. Aangezien gasten niet zijn aangemeld, zal er een cookie gebruikt worden om de gekozen stijl te onthouden.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'De "overschrijf gebruikersstijl" configuratie-instelling is ingeschakeld op dit forum. De stijl-verwisselaar zal niet werken totdat je deze instelling uitschakeld.',
));
