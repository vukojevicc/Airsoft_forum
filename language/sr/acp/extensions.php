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
	'EXTENSION'					=> 'Ekstenzija',
	'EXTENSIONS'				=> 'Ekstenzije',
	'EXTENSIONS_ADMIN'			=> 'Menadžer ekstenzija',
	'EXTENSIONS_EXPLAIN'		=> 'Menadžer ekstenzija je phpBB alat koji Vam omogućava da upravljate svim ekstenzijama i pogledate informacije o njima.',
	'EXTENSION_INVALID_LIST'	=> 'Ekstenzija “%s” je neispravna.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Izabrana ekstenzija nije dostupna za ovaj board. Proverite koje verzije phpBB-a i PHP-a su dozvoljene (pogledajte stranu sa detaljima).',
	'EXTENSION_DIR_INVALID'		=> 'Izabrana ekstenzija ima neispravnu strukturu direktorijuma i ne može biti omogućena.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Izabrana ekstenzija ne može biti omogućena, proverite zahteve ekstenzije.',

	'DETAILS'				=> 'Detalji',

	'EXTENSIONS_DISABLED'	=> 'Iskjučene ekstenzije',
	'EXTENSIONS_ENABLED'	=> 'Uključene ekstenzije',

	'EXTENSION_DELETE_DATA'	=> 'Obriši podatke',
	'EXTENSION_DISABLE'		=> 'Onemogući',
	'EXTENSION_ENABLE'		=> 'Uključi',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Brisanje podataka ekstenzije uklanja sve podatke i podešavanja. Fajlovi same ekstenzije su sačuvani tako da ona može biti ponovo omogućena.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Isključivanje ekstenzije ostavlje njene fajlove, podatke i podešavanja ali uklanja sve funkcije koje ekstenzija omogućava.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Uključivanje ekstenzije omogućava Vam da je koristite na boardu.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Podaci ekstenzije se brišu. Molimo da ne osvežavate ili napuštate ovu stranicu dok se proces ne završi.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Ekstenzije se onemogućava. Molimo da ne osvežavate ili napuštate ovu stranicu dok se proces ne završi.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Ekstenzija se uključuje. Molimo da ne osvežavate ili napuštate ovu stranicu dok se proces ne završi.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Podaci ekstenzije su uspešno obrisani',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Ekstenzija je uspešno isključena',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Ekstenzija je uspešno uključena',

	'EXTENSION_NAME'			=> 'Naziv ekstenzije',
	'EXTENSION_ACTIONS'			=> 'Akcije',
	'EXTENSION_OPTIONS'			=> 'Opcije',
	'EXTENSION_INSTALL_HEADLINE'=> 'Instalacija ekstenzije',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Preuzmite ekstenziju iz phpBB baze ekstenzija</li>
			<li>Raspakujte ekstenziju i ubacite fajlove u <samp>ext/</samp> folder vašeg phpBB boarda</li>
			<li>Omogućite ekstenziju, ovde u menadžeru ekstenzija</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Ažuriranje ekstenzije',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Onemogući ekstenziju</li>
			<li>Obriši fajlove ekstenzije sa fajl sistema</li>
			<li>Pošalji nove fajlove</li>
			<li>Omogući ekstenziju</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Kompletno uklonite ekstenziju sa boarda',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Onemogući ekstenziju</li>
			<li>Obriši podatke ekstenzije</li>
			<li>Obriši fajlove ekstenzije sa fajl sistema</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete podatke asocirane sa  “%s”?<br /><br />Ovim uklanjate dve podatke i podešavanja. Ova operacija se ne može opozvati!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Da li ste sigurni da želite da onemogućite “%s” ekstenziju?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Da li ste sigurni da želite da omogućite “%s” ekstenziju?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Da li ste sigurni da želite da forsirate korišćenje nestabilne verzije?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Povratak na listu ekstenzija',

	'EXT_DETAILS'			=> 'Detalji ekstenziej',
	'DISPLAY_NAME'			=> 'Prikazan naziv',
	'CLEAN_NAME'			=> 'Čisto ime',
	'TYPE'					=> 'Tip',
	'DESCRIPTION'			=> 'Opis',
	'VERSION'				=> 'Verzija',
	'HOMEPAGE'				=> 'Matična stranica',
	'PATH'					=> 'Putanja fajla',
	'TIME'					=> 'Datum izdavanja',
	'LICENSE'				=> 'Licenca',

	'REQUIREMENTS'			=> 'Zahtevi',
	'PHPBB_VERSION'			=> 'phpBB verzija',
	'PHP_VERSION'			=> 'PHP verzija',
	'AUTHOR_INFORMATION'	=> 'Informacija o autoru',
	'AUTHOR_NAME'			=> 'Ime',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Sajt',
	'AUTHOR_ROLE'			=> 'Uloga',


	'NOT_UP_TO_DATE'		=> '%s nije poslednja verzija',
	'UP_TO_DATE'			=> '%s poslednja verzija',
	'ANNOUNCEMENT_TOPIC'	=> 'Obaveštenje prilikom izdavanja',
	'DOWNLOAD_LATEST'		=> 'Download verzija',
	'NO_VERSIONCHECK'		=> 'Nema informacija o verziji.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Proveri sve verzije',
	'FORCE_UNSTABLE'					=> 'Uvek proveri ima li nestabilnih verzija',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Podešavanje provere verzija',
	
	'BROWSE_EXTENSIONS_DATABASE'		=> 'Pogledajte bazu ekstenzija',


	'META_FIELD_NOT_SET'	=> 'Obavezno meta polje %s nije podešeno.',
	'META_FIELD_INVALID'	=> 'Meta polje %s nije ispravno.',
));
