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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Podesite ovu opciju ako se konfiguraciona opcija menja suviše često kako bi postala keširana.',
	'CLI_CONFIG_CURRENT'				=> 'Trenutna vrednost, koristite 0 i 1 za tačno i netačno',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Uspešno obrisano podešavanja %s.',
	'CLI_CONFIG_NEW'					=> 'Nova konfiguraciona vrednost, koristite 0 i 1 za tačno i netačno',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Podešavanje %s ne postoji',
	'CLI_CONFIG_OPTION_NAME'			=> 'Naziv konfiguracione opcije',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Podesite ovu opciju ukoliko vrednost mora biti ispisana bez nove linije na kraju.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Vrednost za povećanje za',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Uspešno primenjeno podešavanje %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ne mogu da podesim %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Uspešno podešeno %s',


	'CLI_DESCRIPTION_CRON_LIST'					=> 'Ispisuje listu spremnih i nespremnih cron poslova.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Pokreće sve spremne cron poslove.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Ime zadakta koji treba da se pokrene',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Ažurira bazu primenjujući migracije.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Brisanje konfiguracione opcije',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Onemogućuje izabranu ekstenziju.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Omogućuje izabranu ekstenziju.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Pronalazi migracije koje su nezavisne.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Daje vrednost konfiguracione opcije',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Povećava vrednost konfiguracione opcije',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Prikazije listu svih ekstenzija u bazi i fajl sistemu.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Rad u Bezbednom Modu (bez ekstenzija).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Pokreće shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Briše izabranu ekstenziju.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Preračunava user_email_hash kolonu u users tabeli.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Podešava vrednost konfiguracione opcije samo ako se stara vrednost poklapa sa trnutnom',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Podešava vrednos konfiguracione opcije',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ne mogu da onemogućim ekstenziju %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Uspešno onemogućena ekstenzija %s',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Ne mogu da omogućim ekstenziju %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Uspešno onogućena ekstenzija %s',
	'CLI_EXTENSION_NAME'				=> 'Naziv ekstenzije',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ne mogu da obrišem ekstenziju %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Uspešno obrisana ekstenzija %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ekstenzije nisu pronađene.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Dosutpna',
	'CLI_EXTENSIONS_DISABLED'			=> 'Onemogućena',
	'CLI_EXTENSIONS_ENABLED'			=> 'Uključena',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Uspešno preračunate sume evih emajlova.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opciono, možete odrediti cron zadatak da se pokrene sama kada je pokrenut određeni cron zadatak.',

));
