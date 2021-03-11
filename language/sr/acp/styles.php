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
	
	'ACP_STYLES_EXPLAIN'	=> 'Ovde možete upravljati svim stilovima koji su dostupni boardu. Stil sadrži šablon, temu i set slika. Možete izmeniti postojeće stilove, brisati, deaktivirati, reaktivirati, napraviti ili uvesti nove. Možete takođe kako će stil da izgleda koristeći pregled funkciju. Trenutni podrazumevani stil je obeležen sa zvezdicom (*). Takođe je prikazan broj korisnika tog stila, znajte da nadjačavanje korisničkog stila neće biti reflektovano ovde.',
	
	'CANNOT_BE_INSTALLED'			=> 'Ne može biti instaliran',
	
	
	
	
	
	
	
	
	
	
	'CONFIRM_UNINSTALL_STYLES'		=> 'Da li ste sigurni da želite da deinstalirate izabrane stilove?',
	'COPYRIGHT'						=> 'Copyright',
	
	'DEACTIVATE_DEFAULT'		=> 'Ne možete deaktivirati podrazumevani stil.',
	'DELETE_FROM_FS'			=> 'Izbriši iz fajl sistema',
	'DELETE_STYLE_FILES_FAILED'	=> 'Greška pri brisanju fojlova za stil "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Fajlovi za stil "%s" su obrisani.',
	'DETAILS'					=> 'Detalji',
	
	
	'INHERITING_FROM'			=> 'Nasleđuje od',
	'INSTALL_STYLE'				=> 'Instaliraj stil',
	'INSTALL_STYLES'			=> 'Instaliraj stilove',
	'INSTALL_STYLES_EXPLAIN'	=> 'Ovde možete instalirati nove stilove.<br />Ukoliko ne možete da pronađete specifičan stil u listi ispod, proverite da li je stil već instaliran. Ukoliko nije instaliran proverite da li je uspešno poslat na server.',
	'INVALID_STYLE_ID'			=> 'Neispravan ID stila.',
	'NO_MATCHING_STYLES_FOUND'	=> 'Nijedan stil se ne poklapa sa vašim upitom.',
	'NO_UNINSTALLED_STYLE'		=> 'Nisu detektovani izbrisani stilovi',
	
	'PURGED_CACHE'				=> 'Keš je obrisan.',

	
	
	'REQUIRES_STYLE'			=> 'Ovaj stil zahteva da stil "%s" bude instaliran.',
	
	
	
	
	
	
	
	
	'STYLE_ACTIVATE'			=> 'Aktivirajte',
	'STYLE_ACTIVE'				=> 'Aktivno',
	'STYLE_DEACTIVATE'			=> 'Deaktiviraj',
	'STYLE_DEFAULT'				=> 'Postavi kao podrazumevani stil',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Morate aktivirati stil pre nego što ga postavite kao podrazumevani.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Neispravan roditeljski stil.',
	'STYLE_ERR_NAME_EXIST'		=> 'Stil sa tim imenom već postoji.',
	'STYLE_ERR_STYLE_NAME'		=> 'Morate priložiti naziv za ovaj stil.',
	'STYLE_INSTALLED'			=> 'Stil "%s" je instaliran.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Povratak na listu stilova',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instaliraj još stilova',
	'STYLE_NAME'				=> 'Naziv stila',
	'STYLE_NAME_RESERVED'		=> 'Stil "%s" ne može da se instalira jer je ime stila rezervisano.',
	'STYLE_NOT_INSTALLED'		=> 'Stil "%s" nije instaliran.',
	'STYLE_PATH'				=> 'Putanja stila',
	'STYLE_UNINSTALL'			=> 'Deinstaliraj',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Stil "%s" ne može da se deinstalira jer sadrži jedan ili više stilova čiji je roditelj.',
	'STYLE_UNINSTALLED'			=> 'Stil "%s" je uspešno deinstaliran.',
	'STYLE_USED_BY'				=> 'Koristi ga',
	'UNINSTALL_DEFAULT'		=> 'Ne možete deinstalirati podrazumevani stil.',
	

	'BROWSE_STYLES_DATABASE'	=> 'Pregledajte bazu stilova',
));
