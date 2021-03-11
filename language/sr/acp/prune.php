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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Ovde možete brisati (ili deaktivirati) korisnike sa vašeg boarda. Ovo može biti učinjeno na više načina; po brojaču postova, poslednjoj aktivnosti, itd. Svaki od ovih kriterijuma se može kombinovati, npr. možete izbaciti korisnike koji su zadnji put bili aktivni pre 2002-01-01 sa manje od 10 postova. Alternativno možete uneti listu korisnika direktno u polju ispod, svaki uneti kriterijum biće ignorisan. Budite oprezni sa ovim! Kada jednom obrišete korisnika nema povratka.',
	
	'CRITERIA'				=> 'Kriterijum',

	'DEACTIVATE_DELETE'			=> 'Deaktiviraj ili obriši',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Izaberite da li želite da deaktivirate korisnike ili ih kompletno obrišete, znajte da nema povratka!',
	'DELETE_USERS'				=> 'Obriši',
	'DELETE_USER_POSTS'			=> 'Obriši sažete postove korisnika',
	'DELETE_USER_POSTS_EXPLAIN' => 'Ukljanja postove koje su pisali obrisani korisnici, nema efekta ako su korisnici deaktivirani.',

	'JOINED_EXPLAIN'			=> 'Unesite datum u <kbd>GGGG-MM-DD</kbd> formatu.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Unesite datum u <kbd>GGGG-MM-DD</kbd> formatu.',

	'POSTS_ON_QUEUE'			=> 'Postovi koji čekaju odobrenje',
	'PRUNE_USERS_GROUP_EXPLAIN'	=> 'Ograničenje na korisnike unutar izabrane grupe.',
	'PRUNE_USERS_GROUP_NONE'	=> 'Sve grupe',
	'PRUNE_USERS_LIST'				=> 'Korisnici koji će biti obrisani',
	'PRUNE_USERS_LIST_DELETE'		=> 'Sa izabranim kriterijumom za brisanje korisnika, sledeći nalozi će biti obrisani.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Sa izabranim kriterijumom za brisanje korisnika, sledeći nalozi će biti deaktivirani.',
	
	'SELECT_USERS_EXPLAIN'		=> 'Unesite određena korisnička imena ovde, biće iskorišćena u svojstvu kriterijuma iznad.',

	'USER_DEACTIVATE_SUCCESS'	=> 'Izabrani korisnici su uspešno deaktivirani.',
	'USER_DELETE_SUCCESS'		=> 'Izabrani korisnici su uspešno obrisani.',
	'USER_PRUNE_FAILURE'		=> 'Nijedan korisnik ne zadvoljava izabrani kriterijum.',
	
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Uneti datum je netačan, istekao je u <kbd>GGGG-MM-DD</kbd> format.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Ovim ćete obrisati sve teme koje nisu poslate ili pogledane u izabranom broju dana koje ste izabrali. Ukoliko ne unesete broj dana onda će sve teme biti obrisane. Standardno, neće biti uklonjene teme u kojima postoje glasanja koja su u toku niti će ukloniti lepljive poruke i obaveštenja.',

	'FORUM_PRUNE'		=> 'Sažimanje foruma',

	'NO_PRUNE'			=> 'Nije sažet nijedan forum',

	'SELECTED_FORUM'	=> 'Izabrani forum',
	'SELECTED_FORUMS'	=> 'Izabrani forumi',

	'POSTS_PRUNED'					=> 'Sažeti postovi',
	'PRUNE_ANNOUNCEMENTS'			=> 'Sažimanje obaveštenja',
	'PRUNE_FINISHED_POLLS'			=> 'Sažimanje zatvorenih glasanja',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Uklanja teme sa glasanjima koja su završena.',
	'PRUNE_FORUM_CONFIRM'			=> 'Da li ste sigurni da želite da obrišete izabrane forume sa izabranim podešavanjima? Jednom obrisani, ne postoji način da povratite obrisane postove i teme.',
	'PRUNE_NOT_POSTED'				=> 'Dana od poslednjeg posta',
	'PRUNE_NOT_VIEWED'				=> 'Dana od poslednjeg pogleda',
	'PRUNE_OLD_POLLS'				=> 'Sažimanje starih glasanja',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Uklanja teme sa glasanjim u kojima nije glasano određeni proj dana.',
	'PRUNE_STICKY'					=> 'Sažimanje lepljivih postova',
	'PRUNE_SUCCESS'					=> 'Forumi su uspešno sažeti',

	'TOPICS_PRUNED'		=> 'Sažete teme',
));
