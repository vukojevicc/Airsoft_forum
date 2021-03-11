<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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
	'ACP_FILES'						=> 'Admin jezički fajlovi',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Ovde možete da instalirate/uklonite jezičke pakete',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete “%s”?',
	
	
	'INSTALLED_LANGUAGE_PACKS'	=> 'Instalirani jezički paketi',
	
	'LANGUAGE_DETAILS_UPDATED'			=> 'Detlji jezika su uspešno ažurirani.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Ovaj jezički paket je već instaliran.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Proizvoljna polja za profil su kopirana iz podrazmevanog jezika. Molimo vas da ih promenite ukoliko je potrebno.',
	'LANGUAGE_PACK_DELETED'				=> '<strong>%s</strong> jezički paket je uspešno uklonjen. Svi korisnici koji su koristilo ovaj jezik su resetovani i postavljen im je podrazumevani jezik board-a.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalji jezičkog paketa',
	'LANGUAGE_PACK_INSTALLED'			=> '<strong>%s</strong> jezički paket je uspešno instaliran.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Lokalni naziv',
	'LANGUAGE_PACK_NAME'				=> 'Naziv',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Izabrani jezički paket ne postoji.',
	'LANGUAGE_PACK_USED_BY'				=> 'Korišćen',
	'LANGUAGE_VARIABLE'					=> 'Jezička promenljiva',
	'LANG_AUTHOR'						=> 'Autor jezičkog paketa',
	'LANG_ENGLISH_NAME'					=> 'Engleski naziv',
	'LANG_ISO_CODE'						=> 'ISO Kod',
	'LANG_LOCAL_NAME'					=> 'Lokalni naziv',

	'MISSING_LANG_FILES'		=> 'Nedostaju jezički fajlovi',
	'MISSING_LANG_VARIABLES'	=> 'Nedostaju jezičke promenljive',
	
	'NO_FILE_SELECTED'				=> 'Niste izabrali jezički fajl.',
	'NO_LANG_ID'					=> 'Niste izabrali jezički paket.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Ne možete ukloniti podrazumevani jezički paket.<br />Ako želite da uklonite ovaj jezički paket, prvo promenite podrazumevani jezik board-a.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nema uklonjenih jezičkih paketa',

	
	'THOSE_MISSING_LANG_FILES'			=> 'Sledeći jezički fajlovi nedostaju u %s jezičkom direktorijumu',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Sledeće promenljive jezičkih fajlova nedostaju u <strong>%s</strong> jezičkom paketom',


	'UNINSTALLED_LANGUAGE_PACKS'	=> 'uklonjeni jezički fajlovi',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Pogledajte bazu jezičkih paketa',
	));
