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
	'ATTACHMENT'						=> 'Prikačeni fajl',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Prikačeni fajlovi su isključeni',
	'APPROVE'							=> 'Odobri',

	'BOOKMARK_ADDED'		=> 'Uspešno ste dodali belešku za temu.',
	'BOOKMARK_ERR'			=> 'Obeležavanje teme nije uspelo. Molimo pokušajte ponovo.',
	'BOOKMARK_REMOVED'		=> 'Uspešno ste uklonili belešku za temu.',
	'BOOKMARK_TOPIC'		=> 'Obeleži temu',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Ukloni belešku',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'Kod',


	'DELETE_TOPIC'			=> 'Obriši temu',
	'DELETED_INFORMATION'	=> 'Obrisao %1$s u %2$s',
	'DOWNLOAD_NOTICE'		=> 'Nemate potrebne dozvole da pogledate prikačene fajlove u ovom postu.',
	'DISAPPROVE'			=> 'Ne odobravaj',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Poslednja izmena od %2$s u %3$s, izmenjeno %1$d put ukupno.',
		2	=> 'Poslednja izmena od %2$s u %3$s, izmenjeno %1$d puta ukupno.',
	),
	'EMAIL_TOPIC'			=> 'Pošalji temu prijatelju email-om',
	'ERROR_NO_ATTACHMENT'	=> 'Izabrani prikačeni fajl više ne postoji',

	'FILE_NOT_FOUND_404'	=> 'Fajl <strong>%s</strong> ne postoji.',
	'FORK_TOPIC'			=> 'Kopiraj temu',
	'FULL_EDITOR'    =>  'Kompletan Editor',

	'LINKAGE_FORBIDDEN'		=> 'Niste autorizovani da pogledate, preuzmeteised ili linkujete od/do ovog sajta.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Obavešteni ste o ovoj temi, molimo vas da se prijavite da bi je pogledali.',
	'LOGIN_VIEWTOPIC'		=> 'Administrator zahteva da budete registrovani i prijavljeni da bi bili u mogućnosti da pogledate ovu temu.',

	'MAKE_ANNOUNCE'				=> 'Promeni u obaveštenje',
	'MAKE_GLOBAL'				=> 'Promeni u globalnu',
	'MAKE_NORMAL'				=> 'Promeni u standardnu temu',
	'MAKE_STICKY'				=> 'Promeni u lepljivu',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Možete izabrati <strong>%d</strong> opciju',
		2	=> 'Možete izabrati do <strong>%d</strong> opcije',
	),
	
	'MISSING_INLINE_ATTACHMENT'	=> 'Prikačeni fajl <strong>%s</strong> više nije dostupan',
	'MOVE_TOPIC'				=> 'Pomeri temu',

	'NO_ATTACHMENT_SELECTED'=> 'Niste izabrali prikačeni fajl za preuzimanje ili pregled.',
	'NO_NEWER_TOPICS'		=> 'Nema novijih tema u ovom forumu',
	'NO_OLDER_TOPICS'		=> 'Nema starijih tema u ovom forumu',
	'NO_UNREAD_POSTS'		=> 'Nema novih nepročitanih postova u ovoj temi.',
	'NO_VOTE_OPTION'		=> 'Morate izabrati opciju kada glasate.',
	'NO_VOTES'				=> 'Nema glasova',

	'POLL_ENDED_AT'			=> 'Glasanje se završava %s',
	'POLL_RUN_TILL'			=> 'Glasanje traje do %s',
	'POLL_VOTED_OPTION'		=> 'Glasali ste za ovu opciju',
	'PRINT_TOPIC'			=> 'Pogled za štampu',
	'POST_DELETED_RESTORE'	=> 'Povrati obrisani post',
	
	'RESTORE'				=> 'Povrati',
	'RESTORE_TOPIC'			=> 'Povrati temu',

	'QUICK_MOD'				=> 'Brzi alati',
	'QUICKREPLY'     =>  'Brzi odgovor',
	'QUOTE'					=> 'Citiraj',

	'REPLY_TO_TOPIC'		=> 'Odgovori na temu',
	'RETURN_POST'			=> '%sVrati se na post%s',

	'SUBMIT_VOTE'			=> 'Glasaj',

	'TOTAL_VOTES'			=> 'Ukupno glasova',
	'TOPIC_TOOLS'			=>	'Alatke teme',

	'UNLOCK_TOPIC'			=> 'Otključaj temu',

	'VIEW_INFO'				=> 'Detalji posta',
	'VIEW_NEXT_TOPIC'		=> 'Sledeća tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Prethodna tema',
	'VIEW_RESULTS'			=> 'Pogledaj rezultate',
	'VIEW_TOPIC_POSTS'		=> array(

		1	=> '%d post',
		2	=> '%d postova',
	),
	'VIEW_UNREAD_POST'		=> 'Prvi nepročitan post',
	'VOTE_SUBMITTED'		=> 'Vaš glas je prihvaćen',
	'VOTE_CONVERTED'		=> 'Menjanje glasova nije moguće za izmenjena glasanja.',

));
