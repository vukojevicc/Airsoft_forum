<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'		=> 'Dodaj fajlove',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Dodajte fajlove na listu za upload i kliknite na start dugme.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s već postoji u listi.',
	'PLUPLOAD_CLOSE'			=> 'Zatvori',
	'PLUPLOAD_DRAG'				=> 'Prevucite fajlove ovde.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Greška - dupli fajl.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Možete dodati fajlove tako što ćete ih prevući u polje sa porukom.',
	'PLUPLOAD_ERR_INPUT'		=> 'Greška - ne mogu da započnem upload.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Neuspelo slanje fajla.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Greška - ne mogu da pošaljem fajl.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Fajl je prevelik:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Greška u fajlu.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Neispravna ekstentija:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Serveru nedostaje memorije.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Upload URL je pogrešan ili ne postoji.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Greška u ekstenziji fajla.',
	'PLUPLOAD_FILE'				=> 'Fajl: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Fajl: %s, veličina: %d, maksimalna veličina: %d',
	'PLUPLOAD_FILENAME'			=> 'Ima fajla',
	'PLUPLOAD_FILES_QUEUED'		=> '%d fajlova u listi',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Univerzalna greška.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP greška.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Format slike je ili pogrešan ili nije podržan.',
	'PLUPLOAD_INIT_ERROR'		=> 'Greška u inicijalizaciji.',
	'PLUPLOAD_IO_ERROR'			=> 'Ulazno/Izlazna greška.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'Nedostupno',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Sigurnosna greška.',
	'PLUPLOAD_SELECT_FILES'		=> 'Izaberite fajlove',
	'PLUPLOAD_SIZE'				=> 'Veličina',
	'PLUPLOAD_SIZE_ERROR'		=> 'Greška u veličini fajla.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Započni slanje',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Start slanje trenutne liste',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Zaustavi slanje',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Zaustavi trenuto slanje',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Poslato %d/%d fajlova',
));
