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
	'CONFIG_NOT_EXIST'					=> 'Podešavanje "%s" neočekivano ne postoji.',

	'GROUP_NOT_EXIST'					=> 'Grupa "%s" neočekivano ne postoji.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Primeni zahteve %s.',
	'MIGRATION_DATA_DONE'				=> 'Instalirani podaci: %1$s; Vreme: %2$.2f sekundi',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Instaliram podakte: %1$s; Vreme: %2$.2f sekundi',
	'MIGRATION_DATA_RUNNING'			=> 'Instaliram podatke: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migracija je već instalirana (preskočena): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Nešto je pošlo naopako tokom zahteva i došlo je do greške. Izmene načinjene pre ove greške su vraćene najbolje što može ali bi trebalo da proverite ima li grešaka na boardu.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migracija "%1$s" nije potpuna, nedostaje migracija "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s nije ispravna migracija.',
	'MIGRATION_SCHEMA_DONE'				=> 'Instalirana šema: %1$s; Vreme: %2$.2f sekundi',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Instaliranje šeme: %1$s; Vreme: %2$.2f sekundi',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Instaliram šemu: %s.',
	
	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'Migracija je neispravna. Nedostaje uslov za UKOLIKO.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'Migracija je neispravna. Odgovarajući korak za migraciju nedostaje za UKOLIKO.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'Migracija je neispravna. Nedostaje dodatna funkcija.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'Migracija je neispravna. Nepoznat tip alata za migraciju.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'Migracija je neispravna. Nedefinisan tip alata za migraciju.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'Migracija je neispravna. Nedefinisan metod alata za migraciju.',

	'MODULE_ERROR'						=> 'Došlo je do greške prilikom kreiranja modula: %s',
	'MODULE_EXISTS'						=> 'Modul već postoji: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Nekoliko modula sa zadatim imenom roditeljskog modula već postoje: %s. Pokušajte da koristite pre/posle ključeve da bi razjasnili položaj modula.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Nedostaje obavezan info fajl modula: %2$s',
	'MODULE_NOT_EXIST'					=> 'Nedostaje obavezan modul: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Nije moguće utvrditi roditeljski modul za: %s',
	'PERMISSION_NOT_EXIST'				=> 'Dozvola "%s" neočekivano ne postoji.',

	'ROLE_NOT_EXIST'					=> 'Uloga dozvole "%s" neočekivano ne postoji.',
));
