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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Ovde možete podešavati indekse pozadine pretrage. Obzirom da normalno koristite samo jedan bekend trebalo bi da izbrišete sve indekse koje ne koristite. Pozle izmene nekih od opcija pretrage (npr. broj minimalnih/maksimalnih karaktera) može biti korisno da ponovo kreirate indeks tako da reflektuje ove izmene.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Ovde možete definisati koji će bekend pretrage biti korišćen za indeksiranjepostova i izvrešenje pretrage. Možete podesiti različite opcije koje će uticati na količinu procesiranja. Neke od ovih opcija su iste za sve bekende.',

	'COMMON_WORD_THRESHOLD'					=> 'Tolerancija čestih reči',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Reči koje se sadrže u većem procentu u svim postovima biće tretirane kao česte. Česte reči se ignorišu u upitima pretrage. Postavite vrednost na nulu da bi ih isključili. Ovo ima efekta samo ako imate više od 100 postova.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Da li ste sigurni da želite da promenite bekend? Posle promene moraćete da kreirate indeks za novi bekend. Ako ne planirate da se vraćate na stari bekend možete takođe da obrišete indeks starog bekenda da bi rasteretili sistemske resurse.',
	'CONTINUE_DELETING_INDEX'				=> 'Nastavi proces brisanja prethodnog indeksa',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Proces brisanja indeksa je počeo. Da bi pristupili stranici za pretragu morate da završite ovaj proces.',
	'CONTINUE_INDEXING'						=> 'Nastavi prethodni proces indeksiranja',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Proces indeksiranja je počeo. Da bi pristupili stranici za pretragu morate da završite ovaj proces.',
	'CREATE_INDEX'							=> 'Napravi indeks',

	'DELETE_INDEX'							=> 'Obriši indeks',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Brisanje indeksa u toku',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Bekend pretrage trenutno briše indeks. Ovo može potrajati nekoliko minuta.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'MySQL fulltext backend može da se koristi samo sa MySQL4 i novijim.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext indeksiranje može da se koristi samo sa MyISAM ili InnoDB tabelama. MySQL 5.6.4 ili noviji je obavezan za fulltext indeksiranje na InnoDB tabelama.',
	
	
	
	
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Ukupni broj indeksiranih postova',
	
	
	
	
	
	
	
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Reči od najmanje ovoliko karaktera će biti indeksirane za pretragu. Vi ili Vaš host možete promeniti ovo podešavanje samo ukoliko izmenite mysql konfiguraciju.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Reči od najmanje ovoliko karaktera će biti indeksirane za pretragu. Vi ili Vaš host možete promeniti ovo podešavanje samo ukoliko izmenite mysql konfiguraciju.',
	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL fulltext backend može da se koristi samo sa PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Ukupan broj indeksiranih postova',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL veryija',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Konfiguracioni profil tekst pretrage:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimalna dužina reči za ključne reči',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maksimalna dužina reči za ključne reči',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Ovaj mod pretrage zahteva PostgreSQL verziju 8.3 i noviju.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Profil konfiguracije tekst pretrage koji se koristi za utvđivanje prosledioca i rečnika.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Reči sa najmanje ovoliko karaktera će biti uključene u upite.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Reči sa ne više od ovoliko karaktera će biti uključene u upite.',
	
	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Podesite sledeće opcije da bi generisali sphinx konfiguracioni fajl',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Putanja do data direktorijuma',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Koristi se z ačuvanje indeksa i log fajlova. Trebalo bi da napravite ovaj folder van web dostupnih foldera. (trebalo bi da ima trailing slash)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Broj postova in često ažuriranom delta indeksu',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host na kom sphinx daemon (searchd) sluša. Ostavite prazno za podrazumevani localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memorijski limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Ovaj broj bi uvek morao biti manji od RAM memorije koja je dostupna. Ukoliko primetite periodične probleme sa performansama to može biti zbog toga što indekser koristi previše resursa. Pomoći će ukoliko smanjite količinu memorije koa je dostupna indekseru.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Broj postova u glavnom indeksu',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port na kom sphinx daemon (searchd) sluša. Ostavite prazno za podrazumevani Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Sphinx pretraga za phpBB podržava samo MySQL i PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx ckonfiguracioni fajl',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Generisan sadržaj sphinx konfiguracionog fajla. Ovi posaci trebaju biti prosleđeni u sphinx.conf koji koristi sphinx daemon. Zamenite [dbuser] i [dbpassword] sa vašim podacima za bazu.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Sphinx podaci i putanja konfiguracionog foldera nisu definisani. Definišite ih da bi se generisao konfiguracioni fajl.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Generalna podešavanja pretrage',
	'GO_TO_SEARCH_INDEX'					=> 'Idi na stranicu za pretragu indeksa',

	'INDEX_STATS'							=> 'Statistika indeksa',
	'INDEXING_IN_PROGRESS'					=> 'Indeksiranje u toku',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Bekend pretrage trenutno indeksira sve postove boarda. Ovo može potrajati od nekoliko minuta do nekoliko sati u zavisnosti od veličine vašeg boarda.',

	'LIMIT_SEARCH_LOAD'						=> 'Limit učitavanja sistema stranice za pretragu',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ako se sistem ne učita za 1 minut stranica za pretragu će biti OffLine, 1.0 je bribližno jednako 100% opterećenja jednod procesora. Ovo radi samo na UNIX baziranim serverima.',

	'MAX_SEARCH_CHARS'						=> 'Maksimalno karaktera indeksiranih pretragom',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Reči sa ne više od ovoliko karaktera će biti indeksirani za pretragu.',
	'MAX_NUM_SEARCH_KEYWORDS'        =>  'Maksimalni broj dozvoljenih ključnih reči',
  'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN' =>  'Maksimalni broj reči koje korisnik može uneti za pretragu. Vrednost 0 omogućeva neograničen broj reči.',
	'MIN_SEARCH_CHARS'						=> 'Minimalno karaktera indeksiranih pretragom',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Reči sa manje od ovoliko karaktera će biti indeksirani za pretragu.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimalno karaktera za autora',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Korisnici moraju uneti najmanje ovoliko karaktera imena kada traže autora sa džokerom. Ako je korisničko ime autora kraće od ovog broja moći ćete još uvek da pretražujete postove autora tako što ćete uneti kompletno korisničko ime.',

	'PROGRESS_BAR'							=> 'Progres',

	'SEARCH_GUEST_INTERVAL'					=> 'Interval flodovanja pretrage za gosta',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Broj sekundi koje gost mora da sačeka između dve pretrage. Ako jedan gost nešto traži, svi ostali će morati da sačekaju dok ne prođe ovde uneto vreme.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Svi postovi do posta id %2$d su sada indeksirani, od čega %1$d postova je bilo u ovom koraku.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Trenutni stepen indeksiranja je otprilike %1$.1f posta u sekundi.<br />Indeksiranje u toku…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Svi postovi do posta id %2$d su uklonjeni iz indeksa pretrage.<br />Brisanje u toku…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Uspešno su indeksirani svi postovi u bazi boarda.',
	'SEARCH_INDEX_REMOVED'					=> 'Uspešno ste izbrisali indeks pretrage za ovaj bekend.',
	'SEARCH_INTERVAL'						=> 'Interval flodovanja pretrage za korisnika',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Broj sekundi koje korisnik mora da sačeka između dve pretrage. Ovaj interval se proverava nezavisno za svakog korisnika.',
	'SEARCH_STORE_RESULTS'					=> 'Dužina keša rezultata pretrage',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Keširani rezultati pretrage će isteći posle ovog vremena, u sekundama. Unesite 0 ako ne želite da koristite keširanje pretrage.',
	'SEARCH_TYPE'							=> 'Bekend pretrage',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB vam dozvoljava da izaberete bekend koji se koristi za pretragu teksta u sadržaju postova. Standardno, pretraga će koristiti phpBB-ovu fulltext pretragu.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Promenili ste bekend pretrage. Da bi mogli da koristite novi bekend trebalo bi da proverite da postoji kreiran indeks za bekend koji ste izabrali.',

	'TOTAL_WORDS'							=> 'Ukupan broj indeksiranih reči',
	'TOTAL_MATCHES'							=> 'Ukupan broj relacija između reči i posta koje su indeksirane',

	'YES_SEARCH'							=> 'Omogući sredstva pretrage',
	'YES_SEARCH_EXPLAIN'					=> 'Omogućuje korisniku da koristi funkcionalnost pretrageuključujući i pretragu članova.',
	'YES_SEARCH_UPDATE'						=> 'Omogući ažuriranje fulltext-a',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Ažuriranje indeksa fulltext-a kada se šalje post, poništava se ukoliko je pretraga isključena.',
));
