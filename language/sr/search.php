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
	'ALL_AVAILABLE'			=> 'Svi dostupni',
	'ALL_RESULTS'			=> 'Svi rezultati',

	'DISPLAY_RESULTS'		=> 'Prikaži rezultate kao',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Pretraga ima %d pogodak',
		2	=> 'Pretraga ima %d pogodaka',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'Pretragom je nađeno više od %d pogodka',
		2	=> 'Pretragom je nađeno više od %d pogodaka',
	),

	'GLOBAL'				=> 'Globalno obaveštenje',
	'GO_TO_SEARCH_ADV'		=> 'Napredna pretraga',

	'IGNORED_TERMS'			=> 'ignorisanih',
	'IGNORED_TERMS_EXPLAIN'	=> 'Sledeće reči u vašoj pretrazi su ignorisane: <strong>%s</strong>',

	'JUMP_TO_POST'			=> 'Idi na post',
	
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Board zahteva da budete registrovani i prijavljeni da bi pogledali vaše postove.',
	'LOGIN_EXPLAIN_UNREADSEARCH' =>  'Board zahteva da budete registrovani i prijavljeni da bi mogli da gledate nepročitane postove.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=>	'Board zahteva da budete registrovani i prijavljeni da bi videli postove od vaše poslednje posete.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Uneli ste previše reči za pretragu. Molimo da ne unosite više od %1$d reči.',
		2	=> 'Uneli ste previše reči za pretragu. Molimo da ne unosite više od %1$d reči.',
	),
	
	'NO_KEYWORDS'			=> 'Morate uneti najmanje jednu reč za pretragu. Svaka reč mora da sadrži najmanje %s karaktera i ne više od %s uključujući džokere.',
	'NO_RECENT_SEARCHES'	=> 'Nije bilo pretraga u skorije vreme',
	'NO_SEARCH'				=> 'Žao nam je, ali nemate dozvolu da koristite sistem pretrage.',
	'NO_SEARCH_RESULTS'		=> 'Nema rezultata.',
	'NO_SEARCH_LOAD'		=> 'Žao nam je ali ne možete sada koristiti pretragu. Opterećenje servera je preveliko. Molimo Vas pokušajte kasnije.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Žao nam je ali ne možete sada koristiti pretragu. Molimo pokušajte za %d sekundu.',
		2	=> 'Žao nam je ali ne možete sada koristiti pretragu. Molimo pokušajte za %d sekundi.',
	),
	'NO_SEARCH_UNREADS'		=> 'Žao nam je, ali pretraga za obrisanim postovima je isključena na ovom boardu.',
	'WORD_IN_NO_POST'		=> 'Nije pronađen nijedan post jer se reč %s ne pojavljuje ni u jednom postu.',
	'WORDS_IN_NO_POST'		=> 'Nije pronađen nijedan post jer se reči %s ne pojavljuju ni u jednom postu.',

	'PHRASE_SEARCH_DISABLED'	=> 'Pretraga po frazama je isključena',
	'POST_CHARACTERS'		=> 'karaktera posta',

	'RECENT_SEARCHES'		=> 'Česte pretrage',
	'RESULT_DAYS'			=> 'Ograniči rezultate na prethodnih',
	'RESULT_SORT'			=> 'Sortiraj rezultate po',
	'RETURN_FIRST'			=> 'Prikaži prvih',

	'SEARCHED_FOR'				=> 'Traženi termin',
	'SEARCHED_TOPIC'			=> 'Tražene teme',
	'SEARCHED_QUERY'			=> 'Traženi upit',
	'SEARCH_ALL_TERMS'			=> 'Traži sve termine ili koristi upit kao što je napisan',
	'SEARCH_ANY_TERMS'			=> 'Traži bilo koje termine',
	'SEARCH_AUTHOR'				=> 'Pronađi autora',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Koristite * kao džoker za delimična poklapanja',
	'SEARCH_FIRST_POST'			=> 'Samo prvi post teme',
	'SEARCH_FORUMS'				=> 'Pretraga u forumima',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Izaberite forum ili forume u kojima želite da pretražujete. Zbog brzine, svi podforumi se mogu pretraživati tako što ćete izabrati roditeljki forum i omogućiti pretragu podforuma ispod.',
	'SEARCH_IN_RESULTS'			=> 'Pretraži u rezultatima',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Stavite <strong>+</strong> ispred reči koja mora biti pronađena i <strong>-</strong> ispred reči koja nesme biti pronađena. Stavite listu reči razdvojene <strong>|</strong> u zagrade ako samo jedna od tih reči mora biti pronađena. Koristite * kao džoker za nepotpuna poklapanja.',
	'SEARCH_MSG_ONLY'			=> 'Samo tekst poruke',
	'SEARCH_OPTIONS'			=> 'Opcije pretrage',
	'SEARCH_QUERY'				=> 'Upit za pretragu',
	'SEARCH_SUBFORUMS'			=> 'Pretražuj podforume',
	'SEARCH_TITLE_MSG'			=> 'Naslovi postova i tekst poruka',
	'SEARCH_TITLE_ONLY'			=> 'Samo naslovi tema',
	'SEARCH_WITHIN'				=> 'Pretraga u',
	'SORT_ASCENDING'			=> 'Po abecednom redosledu',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Suprotno abecednom redosledu',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Naslov posta',
	'SORT_TIME'					=> 'Vreme posta',
	'SPHINX_SEARCH_FAILED'		=> 'Search failed: %s',
    'SPHINX_SEARCH_FAILED_LOG'	=> 'Log sphinx pretrage',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Morate uneti najmanje %d karakter autorovog imena.',
		2	=> 'Morate uneti najmanje %d karaktera autorovog imena.',
	),
));
