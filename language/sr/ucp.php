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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Pristupanjem na “%1$s” (u daljem tekstu “mi”, “naš”, “%1$s”, “%2$s”), prihvatate uslove navedene u daljem tekstu uslove. Ako se ne slažete sa uslovima molimo vas da ne pristupate i/ili koristite “%1$s”. Mi možemo ove uslove promeniti bilo kada i obavestićemo vas o tome, mada bi bilo mudro da sami proverite regulativnost uslova dok koristite “%1$s”. Posle izmena to znači da prihvatate nove uslove.<br />
	<br />
	Naše forume pokreće phpBB (u daljem tekstu “oni”, “njihov”, “phpBB softver”, “www.phpbb.com”, “phpBB Grupa”, “phpBB Timovi”) što predstavlja rešenje za bilten board idat pod “<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>” (u daljem tekstu “GPL”) i može biti preuzet sa <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB softver se odnosi samo na Internet bazirane diskusije  GPL strictly forbids them in what we allow and/or disallow as permissible content and/or conduct. Za dalje informacije o phpBB-u, pogledajte: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Prihvatate da nećete slati uvredljive, vulgarne, kleveničke, reči mržnje, preteće, seksualno orijentisane reči ili bilo kakav materijal koji ne poštuje zakon vaše zemlje, zemlje gde je “%1$s” hostovan kao i međunarodni zakon. Čineći to, rizikujete da budete odmah i zauvek izbačeni, uz obaveštenje vašeg Internet provajdera ako mi tako zahtevamo. IP adrese svih postova se beleže da bi pomogle u ispunjavanju ovih uslova. Prihvatate da “%1$s” ima prava da ukloni, izmeni, pomeri ili zatvori bilo koju temu bilo kada. Kao korisnik, prihvatate da bilo koja informacija koju unesete bude sačuvana u našoj bazi. Ove informacije neće biti prikazivane trećim licima bez vašeg pristanka, niti će “%1$s” ili phpBB biti odgovoran za bilo kakav hakerski pokušaj da ovi podaci budu kompromitovani.
	',

	'PRIVACY_POLICY'		=> 'Ova polisa objašnjava u detalje kako “%1$s” zajedno sa njegovim prisvojenim kompanijama (u daljem tekstu “mi”, “naš”, “%1$s”, “%2$s”) i phpBB (u daljem tekstu “oni”, “njihovi”, “phpBB softver”, “www.phpbb.com”, “phpBB Grupa”, “phpBB Timovi”) koriste bilo kakve informacije prikupljene prilikom bilo koje sesije kada koristite board (u daljem tekstu “vaše informacije”).<br />
	<br />
	Vaše informacije se sakupljaju na dva načina. Prvo, pregledanje “%1$s” će prouzrokovati da phpBB softver napravi nekoliko kolačića, koji su mali tekstualni fajlovi koji se sašu na vaš računar u privremeni direktorijum vašeg web browser-a. Prva dva kolačića samo sadrže identifikaciju korisnika (u daljem tekstu “korisnikov id”) i identifikator anonimne sesije (u daljem tekstu “id sesije”), koji se automatski dodeljuju vama putem phpBB softvera. Treći kolačić će biti kreiran kada pregledate teme u okviru “%1$s” i koristi se da sačuva podatke o temama koje ste čitali, i tako povećava ugođaj korisnika.<br />
	<br />
	Mi takođe kreiramo kolačiće van phpBB softvera dok pregledate “%1$s”, iako su oni van okvira ovog dokumentae koji su namenjeni da samo pokriju stranice kreirane pomoću phpBB softvera. Drugi način na koji sakupljamo vaše informacije je ono što vi nama pošaljete. Ovo može biti, i nije ograničeno na: postovanje kao anonimni korisnik (u daljem tekstu “anonimni postovi”), registrovanje na “%1$s” (u daljem tekstu “vaš nalog”) i postovi koje ste vi poslali nakon registracije i dok ste prijavljeni (u daljem tekstu “vaši postovi”).<br />
	<br />
	Vaš nalog će kao minimum sadržati unikatno identifikaciono ime (u daljem tekstu “vaše korisničko ime”), lična šifra kou koja se koristi za prijavljivanje na vaš nalog (u daljem tekstu “vaša šifra”) i lična, ispravna email adresa (u daljem tekstu “vaš email”). Vaše informacije za vaš nalog na “%1$s” su zaštićene sa zakonima o zaštiti podataka prihvatljivim u zemlji koja hostuje nas. Bilo koje informacije pored vašeg korisničkog imena, vaše šifre i vašeg email-a a koju zahteva “%1$s” tokom procesa registracije su na nama da odlučimo šta je obavezno a šta opciono. U svim slučajevima, imate opciju da izaberete koje će informacije biti javno prikazane. Dalje, sa vašim nalogom, imate opciju opcionog ulaza i izlaza automatski generisanih email-ova generisanih phpBB softverom.<br />
	<br />
	Vaš šifra je kriptovana (u jednom smeru) tako da je bezbedna. Međutim, preporučljivo je da ne koristite istu šifru na više različitih sajtova. Vaša šifra je namenjena pristupu vašeg naloga na “%1$s”, zato vas molimo da je požlivo čuvate i ni pod kakvim okolnostima će bilo ko povezan sa “%1$s”, phpBB-om ili bilo koje treće lice, legitimno moći da zatraži vašu šifru. Ukoliko zaboravite šifru za vaš nalog, možete koristiti opciju “Zaboravio sam šifru” koju nudi phpBB softver. Ovaj proces će od vas zatražiti vaše korisničko ime i vaš email, i onda će phpBB softver generisati novu šifru da povratite vaš nalog.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Vaš nalog je aktiviran. Hvala vam što ste se registrovali',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Nalog je sada aktiviran',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Vaš nalog je uspešno reaktiviran.',
	'ACCOUNT_ADDED'					=> 'Hvala vam što ste se registrovali, vaš nalog je kreiran. Sada se možete prijaviti sa vašim korisničkim imenom i šifrom',
	'ACCOUNT_COPPA'					=> 'Vaš nalog je kreiran ali mora da bude odobren, molimo vas da proverite vaš email za detalje.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Vaš nalog je ažuriran. Međutim, ovaj board zahteva reaktivaciju naloga pri promeni email adrese. Aktivacioni ključ je  poslat na vašu novu email adresu koju ste uneli. Molimo vas da proverite vaš email za dalje informacije.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Vaš nalog je ažuriran. Međutim, ovaj board zahteva reaktivaciju naloga od administratora pri promeni email adrese. Email im je poslat i bićete obavešteni kada vaš nalog bude reaktiviran.',
	'ACCOUNT_INACTIVE'				=> 'Vaš nalog je kreiran. Međutim, ovaj forum zahteva aktivaciju naloga, aktivacioni ključ je poslat na vašu email adresu koju ste uneli. Proverite vaš email ta dalja uputstva',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Vaš nalog je kreiran. Međutim, ovaj forum zahteva aktivaciju naloga od administratora. Email im je poslat i bićete informisani kada vaš nalog bude aktiviran',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivacioni email je poslat na vašu email adresu',
	'ACTIVATION_EMAIL_SENT_ADMIN'		=> 'Aktivacioni email je poslat na email adresu administratora.',
	'ADD'							=> 'Dodaj',
	'ADD_BCC'						=> 'Dodaj [BCC]',
	'ADD_FOES'						=> 'Dodaj nove protivnike',
	'ADD_FOES_EXPLAIN'				=> 'Možete uneti više korisničkih imena svako u novu liniju',
	'ADD_FOLDER'					=> 'Dodaj folder',
	'ADD_FRIENDS'					=> 'Dodaj nove prijatelje',
	'ADD_FRIENDS_EXPLAIN'			=> 'Možete uneti više korisničkih imena svako u novu liniju',
	'ADD_NEW_RULE'					=> 'Dodaj novo pravilo',
	'ADD_RULE'						=> 'Dodaj pravilo',
	'ADD_USERS_UCP_EXPLAIN'  => 'Ovde možete dodati nove korisnike u grupu. Možete izabrati da li će ova grupa postati nova podrazumevana grupa za izabrane korisnike. Molimo Vas da unesete svako korisničko ime u novi red.',
	'ADD_TO'						=> 'Dodaj [Za]',
	'ADMIN_EMAIL'					=> 'Administratori mi mogu slati email-ove sa informacijama',
	'AGREE'							=> 'Prihvatam ove uslove',
	'ALLOW_PM'						=> 'Dozvoli korisnicima da mi pošalju privatne poruke',
	'ALLOW_PM_EXPLAIN'				=> 'Znajte da će administratori i moderatori uvek biti u mogućnosti da vam šalju poruke.',
	'ALREADY_ACTIVATED'				=> 'Već ste aktivirali vaš nalog',
	'ATTACHMENTS_EXPLAIN'			=> 'Ovo je lista prikačenih fajlova koje ste poslali u postovima u ovom forumu.',
	'ATTACHMENTS_DELETED'			=> 'Prikačeni fajlovi su uspešno obrisani.',
	'ATTACHMENT_DELETED'			=> 'Prikačeni fajl je uspešno obrisan.',
	'AUTOLOGIN_SESSION_KEYS_DELETED'=> 'Izabrani "Upamti me" ključevi za prijavu su uspešno obrisani.',
	'AVATAR_CATEGORY'				=> 'Kategorija',
	
	'AVATAR_DRIVER_GRAVATAR_TITLE'	=> 'Gravatar',
	'AVATAR_DRIVER_GRAVATAR_EXPLAIN'=> 'Gravatar je servis koji Vam omogućava da zadržite isti avatar na više različitih sajtova. Posetite <a href="http://www.gravatar.com/">Gravatar</a> za više informacija.',
	'AVATAR_DRIVER_LOCAL_TITLE'		=> 'Galerija avatara',
	'AVATAR_DRIVER_LOCAL_EXPLAIN'	=> 'Možete izabrati Vaš avatar iz lokalnog seta.',
	'AVATAR_DRIVER_REMOTE_TITLE'	=> 'Udaljeni avatar',
	'AVATAR_DRIVER_REMOTE_EXPLAIN'	=> 'Link ka avatar sličicama sa drugog sajta.',
	'AVATAR_DRIVER_UPLOAD_TITLE'	=> 'Pošalji avatar',
	'AVATAR_DRIVER_UPLOAD_EXPLAIN'	=> 'Pošaljite svoj sopstveni avatar.',
	'AVATAR_EXPLAIN'				=> 'Maksimalne dimenzije; širina: %1$s, visina: %2$s, veličina fajla: %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Funkcija avatara je trenutno onemogućena.',
	'AVATAR_GALLERY'				=> 'Lokalna galerija',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Ne mogu da pošaljem avatar za %s',
	'AVATAR_NOT_ALLOWED'   =>  'Vaš avatar ne može da bude prikazan jer su avatari zabranjeni.',
  'AVATAR_TYPE_NOT_ALLOWED' =>  'Vaš trenutni avatar ne može da bude prikazan jer je njegov tip zabranjen.',
	'AVATAR_PAGE'					=> 'Stranica',
	'AVATAR_SELECT'					=> 'Izaberite avatar',
	'AVATAR_TYPE'					=> 'Tip avatara',

	'BACK_TO_DRAFTS'			=> 'Povratak na sačuvane nacrte',
	'BACK_TO_LOGIN'				=> 'Povratak na prijavu',
	'BIRTHDAY'					=> 'Rođendan',
	'BIRTHDAY_EXPLAIN'			=> 'Podeđavanjem godine će prikazati vaše godine kada vam je rođendan.',
	'BOARD_DATE_FORMAT'			=> 'Moj format datuma',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Sintaksa je identična PHP-ovoj <a href="http://www.php.net/date">date()</a> funkciji',
	'BOARD_LANGUAGE'			=> 'Moj jezik',
	'BOARD_STYLE'				=> 'Moj stil boarda',
	'BOARD_TIMEZONE'			=> 'Moj vremenska zona',
	'BOOKMARKS'					=> 'Beleške',
	'BOOKMARKS_EXPLAIN'			=> 'Možete zabeležiti teme za buduće reference. Obeležite kućicu za sve beleške koje želite da obrišete, a onda kliknite na dugme <em>Ukloni izabrane beleške</em>.',
	'BOOKMARKS_DISABLED'		=> 'Beleške su isključene na ovom boardu',
	'BOOKMARKS_REMOVED'			=> 'Beleške su uspešno uklonjene',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Ne možete više menjati ili obrisati tu poruku',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Poruke ne mogu biti pomerene u folder koji želite da uklonite.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Poruke ne mogu biti uklonjene iz outbox-a.',
	'CANNOT_RENAME_FOLDER'		=> 'Ovaj folder ne možete preimenovati.',
	'CANNOT_REMOVE_FOLDER'		=> 'Ovaj folder se ne može ukloniti.',
	'CHANGE_DEFAULT_GROUP'		=> 'Promeni podrazumevanu grupu',
	'CHANGE_PASSWORD'			=> 'Promeni šifru',
	'CLICK_RETURN_FOLDER'		=> '%1$sPovratak u vaš “%3$s” folder%2$s',
	'CLICK_GOTO_FOLDER'			=> '%1$sPovratak u vaš “%3$s” folder%2$s',
	'CONFIRMATION'				=> 'Potvrda registracije',
	'CONFIRM_CHANGES'			=> 'Potvrdi izmene',	
	'CONFIRM_EXPLAIN'			=> 'Da bi sprečili automatske registracije administrator zahteva da unesete kod za potvrdu. Kod je prikazan u slici ispod. Ako ste vizuelno oštećeni ili na bilo koji drugi način ne možete da pročitate ovaj kod, molimo vas da kontaktirate %sAdministratora%s.',
	'CONFIRM_PASSWORD'			=> 'Potvrdite novu šifru',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Morate potvrditi vašu šifru samo ukoliko ste je promenili iznad',
	'COPPA_BIRTHDAY'			=> 'Da bi nastavili sa procesom registracije recite nam gde ste rođeni.',
	'COPPA_COMPLIANCE'			=> 'COPPA žalba',
	'COPPA_EXPLAIN'				=> 'Znajte da klikom na Pošalji dume kreirate vaš nalog. Međutim, nalog ne može biti aktiviran dok roditelj ili staratelj ne odobri vašu registraciju. Biće vam poslat email u kome se nalazi neophodni formular sa detaljima gde da ga pošaljete.',
	'CREATE_FOLDER'				=> 'Dodaj folder…',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN'	=> 'Da bi promenili šifru, email adresu ili korisničko ime, morate uneti svoju trenutnu šifru.',
	'CURRENT_IMAGE'				=> 'Trenutna slika',
	'CURRENT_PASSWORD'			=> 'Trenutna šifra',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Morate potvrditi trenutnu šifru ako želite da je promenite, promenite vašu email adresu ili korisničko ime.',
	'CUR_PASSWORD_ERROR'		=> 'Trenutna šifra koju ste uneli je netačna.',
	'CUR_PASSWORD_EMPTY'		=> 'Niste uneli vašu trenutnu šifru.',
	'CUSTOM_DATEFORMAT'			=> 'Proizvoljan…',

	'DEFAULT_ACTION'			=> 'Podrazumevana akcija',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Ova akcija će biti aktivirana ako ni jedna od opcija iznad nije moguća',
	'DEFAULT_ADD_SIG'			=> 'Podrazumevano priključi moj potpis',
	'DEFAULT_BBCODE'			=> 'Podrazumevano omogući BBKod',
	'DEFAULT_NOTIFY'			=> 'Podrazumevano me obavesti o odgovorima',
	'DEFAULT_SMILIES'			=> 'Podrazumevano omogući smajlije',
	'DEFINED_RULES'				=> 'Definisana pravila',
	'DELETED_TOPIC'				=> 'Tema je uklonjena',
	'DELETE_ATTACHMENT'			=> 'Obriši prikačeni fajl',
	'DELETE_ATTACHMENTS'		=> 'Obriši prikačene fajlove',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ovaj fajl?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Da li ste sigurni da želite da obrišete ove fajlove?',
	'DELETE_AVATAR'				=> 'Obriši sliku',
	'DELETE_COOKIES_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete sve kolačiće koje je postavio ovaj board?',
	'DELETE_MARKED_PM'			=> 'Obriši obeležene poruke',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete sve obeležene poruke?',
	'DELETE_OLDEST_MESSAGES'	=> 'Obriši najstarije poruke',
	'DELETE_MESSAGE'			=> 'Obriši poruku',
	'DELETE_MESSAGE_CONFIRM'	=> 'Da li ste sigurni da želite da obrišete ovu privatnu poruku?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Obriši sve poruke sa obrisanim folderom',
	'DELETE_RULE'				=> 'Obriši pravilo',
	'DELETE_RULE_CONFIRM'		=> 'Da li ste sigurni da želite da obrišete ovao pravilo?',
	'DEMOTE_SELECTED'			=> 'Premesti izabrane',
	'DISABLE_CENSORS'			=> 'Omogući cenzuru reči',
	'DISPLAY_GALLERY'			=> 'Prikaži galeriju',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Uneti email domen nema ispravan MX zapis.',
	'DOWNLOADS'					=> 'Preuzimanja',
	'DRAFTS_DELETED'			=> 'Svi izabrani nacrti su uspešno izbrisani.',
	'DRAFTS_EXPLAIN'			=> 'Ovde možete pogledati, izmeniti i obrisati vaše snimljene nacrte.',
	'DRAFT_UPDATED'				=> 'Nacrt uspešno ažuriran.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Ovde možete izmeniti vaš nacrt. Nacrti ne sadrže prikačene fajlove i informacije o glasanju.',
	'EMAIL_BANNED_EMAIL'		=> 'Email adresa koju ste uneli nije dozvoljena za korišćenje.',
	'EMAIL_REMIND'				=> 'Ovo mora biti email adresa koju ste uneli pri registraciji.',
	'EMAIL_TAKEN_EMAIL'			=> 'Email adresa koju ste uneli je već zauzeta',
	'EMPTY_DRAFT'				=> 'Morate uneti poruku da bi poslali vaše izmene',
	'EMPTY_DRAFT_TITLE'			=> 'Morate uneti naslov nacrta',
	'EXPORT_AS_XML'				=> 'Izvezi kao XML',
	'EXPORT_AS_CSV'				=> 'Izvezi kao CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'Izvezi kao CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'Izvezi kao TXT',
	'EXPORT_AS_MSG'				=> 'Izvezi kao MSG',
	'EXPORT_FOLDER'				=> 'Izvezi folder',

	'FIELD_REQUIRED'					=> 'Polje “%s” mora biti kompletno.',
	'FIELD_TOO_SHORT'					=> array(
		1	=> 'Polje “%2$s” je prekratko, minimum %1$d karakter je obavezan.',
		2	=> 'Polje “%2$s” je prekratko, minimum %1$d karaktera je obavezno.',
	),
	'FIELD_TOO_LONG'					=> array(
		1	=> 'Polje “%2$s” je predugačko, maksimum %1$d karakter je obavezan.',
		2	=> 'Polje “%2$s” je predugačko, maksimum %1$d karaktera je obavezno.',
	),
	'FIELD_TOO_SMALL'					=> 'Vrednost “%1$s” je premala, minimalna vrednost od %2$d je obavezna.',
	'FIELD_TOO_LARGE'					=> 'Vrednost “%1$s” je prevelika, maksimalna vrednost od %2$d je dozvoljena.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo brojevi su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički karakteri su dozvoljeni.',
	'FIELD_INVALID_DATE'				=> 'Polje “%s” ima nepravilan datum.',
	'FIELD_INVALID_VALUE'				=> 'Polje “%s” ima nepravilan sadržaj.',
	'FIELD_INVALID_CHARS_INVALID'		=> 'Polje “%s” ima nepravilne karaktere.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo brojevi su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_DOTS'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički karakteri ili . su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_PUNCTUATION'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički ili _,-. karakteri su dozvoljeni i prvi karakter mora biti slovo.',
	'FIELD_INVALID_CHARS_ALPHA_SPACERS'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički, razmak ili  -+_[] karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_ALPHA_UNDERSCORE'	=> 'Polje “%s” ima nepravilne karaktere, samo alfanumerički ili _ karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_LETTER_NUM_DOTS'	=> 'Polje “%s” ima nepravilne karaktere, samo slova, brojevi ili . karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_LETTER_NUM_ONLY'	=> 'Polje “%s” ima nepravilne karaktere, samo slova i brojevi su dozvoljeni.',
	'FIELD_INVALID_CHARS_LETTER_NUM_PUNCTUATION'	=> 'Polje “%s” ima nepravilne karaktere, samo slova, brojevi ili _,-. karakteri su dozvoljeni i prvi karakter mora biti slovo.',
	'FIELD_INVALID_CHARS_LETTER_NUM_SPACERS'		=> 'Polje “%s” ima nepravilne karaktere, samo slova, brojevi, razmak ili -+_[] karakteri su dozvoljeni.',
	'FIELD_INVALID_CHARS_LETTER_NUM_UNDERSCORE'		=> 'Polje “%s” ima nepravilne karaktere, samo slova, brojevi ili _ karakteri su dozvoljeni.',
	'FIELD_INVALID_URL'					=> 'Polje “%s” ima neispravnu adresu.',

	'FOE_MESSAGE'				=> 'Poruka od protivnika',
	'FOES_EXPLAIN'				=> 'Protivnici su korisnici koji će standardno biti ignorisani. Postovi tih korisnika neće biti potpuno vidljivi i privatne poruke će biti zabranjene. Znajte da ne možete ignorisati moderatore ili administratore.',
	'FOES_UPDATED'				=> 'Vaša lista protivnika je uspešno ažurirana',
	'FOLDER_ADDED'				=> 'Folder je uspešno dodat',
	'FOLDER_MESSAGE_STATUS'		=> array(
		1	=> '%2$d od %1$s sačuvana',
		2	=> '%2$d od %1$s sačuvanih',
	),
	'FOLDER_NAME_EXIST'			=> 'Folder <strong>%s</strong> već postoji',
	'FOLDER_NAME_EMPTY'    =>  'Morate uneti ime za ovaj folder.',
	'FOLDER_OPTIONS'			=> 'Opcije foldera',
	'FOLDER_RENAMED'			=> 'Folder je uspešno preimenovan',
	'FOLDER_REMOVED'			=> 'Folder je uspešno uklonjen',
	'FOLDER_STATUS_MSG'			=> array(
		1	=> 'Folder je %3$d%% pun (%2$d od %1$s sačuvana)',
		2	=> 'Folder je %3$d%% pun (%2$d od %1$s sačuvanih)',
	),
	'FORWARD_PM'				=> 'Prosledi PP',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Pre nego što možete nastaviti sa pregledom boarda, u obavezi ste da promenite vašu šifru',
	'FRIEND_MESSAGE'			=> 'Poruka od prijatelja',
	'FRIENDS'					=> 'Prijatelji',
	'FRIENDS_EXPLAIN'			=> 'Prijatelji vam omogućavaju brz pristup sa članovima sa kojima često komunicirate. Ako šablon ima relevantnu podršku, svaki post koji napiše prijatelj može biti istaknut.',
	'FRIENDS_OFFLINE'			=> 'OffLine',
	'FRIENDS_ONLINE'			=> 'OnLine',
	'FRIENDS_UPDATED'			=> 'Vaša lista prijatelja je uspešno ažurirana',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Puna opcija foldera je uspešno izmenjena',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Originalna poruka --------',
	'FWD_SUBJECT'				=> 'Tema: %s',
	'FWD_DATE'					=> 'Datum: %s',
	'FWD_FROM'					=> 'Od: %s',
	'FWD_TO'					=> 'Za: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Globalno obaveštenje',
	'GRAVATAR_AVATAR_EMAIL'			=> 'Gravatar email',
	'GRAVATAR_AVATAR_EMAIL_EXPLAIN'	=> 'Unesite email adresu koju ste koristili prilikom registracije Vašeg naloga na <a href="http://www.gravatar.com/">Gravatar</a>.',
	'GRAVATAR_AVATAR_SIZE'			=> 'Avatar dimenzije',
	'GRAVATAR_AVATAR_SIZE_EXPLAIN'	=> 'Upišite širinu i visinu avatara. Ostavite prazno za pokušaj automatske detekcije.',

	'HIDE_ONLINE'				=> 'Sakrij moj OnLine status',
	'HIDE_ONLINE_EXPLAIN'		=> 'Menjenje ove opcije neće imati uticaja sve do ponovne posete boarda.',
	'HOLD_NEW_MESSAGES'			=> 'Ne prihvataj nove poruke (Nove poruke će biti zadržane dok se ne obezbedi dovoljno mesta)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nove poruke će biti zadržane',

	'IF_FOLDER_FULL'			=> 'Ako je folder pun',
	'IMPORTANT_NEWS'			=> 'Važna obaveštenja',
	'INVALID_CHARS_USERNAME'	=> 'Korisničko ime sadrži zabranjene karaktere.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Šifra ne sadrži obavezne karaktere.',
	'INVALID_USER_BIRTHDAY'		=> 'Uneti datum je neispravan.',
	'ITEMS_REQUIRED'			=> 'Stavke označene sa * su obavezna polja profilai moraju biti popunjena',

	'JOIN_SELECTED'				=> 'Pridruži izabranoj',

	'LANGUAGE'					=> 'Jezik',
	'LINK_REMOTE_AVATAR'		=> 'Link van sajta',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Unesite URL lokacije koja sadrži avatar koju želite da likujete.',
	'LINK_REMOTE_SIZE'			=> 'Dimenzije avatara',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Unesite širinu i visinu avatara, ostavite prazno za pokušaj automatske verifikacije.',
	'LOGIN_EXPLAIN_UCP'			=> 'Molimo vas da se logujete da bi pristupili Korisničkom Kontrolnom Panelu',
	'LOGIN_LINK'					=> 'Povežite ili registrujte Vaš nalog sa drugog servisa sa nalogom na boardu',
	'LOGIN_LINK_EXPLAIN'			=> 'Pokušali ste da se prijavite sa servisom koji još uvek nije povezan sa Vašim nalogom na boardu. Sada morate ili da povežete ovaj nalog sa postojećim nalogom ili da napravite novi nalog.',
	'LOGIN_LINK_MISSING_DATA'		=> 'Podaci koji su potrebni za povezivanje vašeg naloga sa drugim servisom nisu dostupni. Molimo da ponovite proces prijave.',
	'LOGIN_LINK_NO_DATA_PROVIDED'	=> 'Nema priloženih podataka ka ovoj stranici da bi povezali nalog sa drugog servisa sa Vašim board nalogom. Molimo Vas da kontaktirate administratora boarda ukoliko i dalje imate problema.',
	'LOGIN_KEY'					=> 'Ključ za prijavu',
	'LOGIN_TIME'				=> 'Vreme prijave',
	'LOGIN_REDIRECT'			=> 'Uspešno ste se prijavili.',
	'LOGOUT_FAILED'				=> 'Niste odjavljeni, jer se zahtev ne poklapa sa vašom sesijom. Molimo vas da kontaktirate administratora ako i ubuduće imate probleme.',
	'LOGOUT_REDIRECT'			=> 'Uspešno ste se odjavili.',

	'MARK_IMPORTANT'				=> 'Obeleži kao važno',
	'MARKED_MESSAGE'				=> 'Obeležena poruka',
	'MAX_FOLDER_REACHED'			=> 'Dostigli ste maksimalni broj korisnički definisanih foldera',
	'MESSAGE_BY_AUTHOR'				=> 'od',
	'MESSAGE_COLOURS'				=> 'Boje poruke',
	'MESSAGE_DELETED'				=> 'Poruka uspešno obrisana',
	'MESSAGE_EDITED'				=> 'Poruka je uspešno izmenejna.',
	'MESSAGE_HISTORY'				=> 'Istorija poruke',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ovu poruku je uklonio njen autor pre nego što je isporučena',
	'MESSAGE_SENT_ON'				=> 'na',
	'MESSAGE_STORED'				=> 'Vaša poruka je uspešno poslata',
	'MESSAGE_TO'					=> 'Za',
	'MESSAGES_DELETED'				=> 'Poruke uspešno obrisane',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Pomeri poruke iz uklonjenog foldera u',
	'MOVE_DOWN'						=> 'Pomeri dole',
	'MOVE_MARKED_TO_FOLDER'			=> 'Pomeri obeležene u %s',
	'MOVE_PM_ERROR'					=> array(
		1	=> 'Došlo je od greške prilikom pomeranja poruka u novi folder, samo %2$d od %1$s pomerena.',
		2	=> 'Došlo je od greške prilikom pomeranja poruka u novi folder, samo %2$d od %1$s pomerene.',
	),
	'MOVE_TO_FOLDER'				=> 'Pomeri u folder',
	'MOVE_UP'						=> 'Pomeri gore',

	'NEW_FOLDER_NAME'				=> 'Ime novog foldera',
	'NEW_PASSWORD'					=> 'Nova šifra',
	'NEW_PASSWORD_ERROR'			=> 'Šifre koje ste uneli se ne poklapaju.',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Niste uneli šifru za potvrdu.',
	'NOTIFICATIONS_MARK_ALL_READ'						=> 'Obeleži sva obaveštenja kao pročitana',
	'NOTIFICATIONS_MARK_ALL_READ_CONFIRM'				=> 'Da li ste sigurni da želite da obeležite sva obaveštenja kao pročitana?',
	'NOTIFICATIONS_MARK_ALL_READ_SUCCESS'				=> 'Sva obaveštenja su obeležena kao pročitana.',
	'NOTIFICATION_GROUP_MISCELLANEOUS'					=> 'Razna obaveštenja',
	'NOTIFICATION_GROUP_MODERATION'						=> 'Moderatorska obaveštenja',
	'NOTIFICATION_GROUP_ADMINISTRATION'					=> 'Administraciona obaveštenja',
	'NOTIFICATION_GROUP_POSTING'						=> 'Obaveštenja o postovima',
	'NOTIFICATION_METHOD_EMAIL'							=> 'Email',
	'NOTIFICATION_METHOD_JABBER'						=> 'Jabber',
	'NOTIFICATION_TYPE'									=> 'Tip obaveštenja',
	'NOTIFICATION_TYPE_BOOKMARK'						=> 'Neko je odgovorio na temu koju ste obeležili',
	'NOTIFICATION_TYPE_GROUP_REQUEST'					=> 'Neko je zahtevao da se pridruži grupi koju vi vodite',
	'NOTIFICATION_TYPE_IN_MODERATION_QUEUE'				=> 'Post ili tema čeka na odobrenje',
	'NOTIFICATION_TYPE_MODERATION_QUEUE'				=> 'Vaše teme/postovi su odobreni ili neodobreni od moderatora',
	'NOTIFICATION_TYPE_PM'								=> 'Neko Vam je poslao privatnu poruku',
	'NOTIFICATION_TYPE_POST'							=> 'Neko je odgovorio na temu koju pratite',
	'NOTIFICATION_TYPE_QUOTE'							=> 'Neko Vas je citirao u svom postu',
	'NOTIFICATION_TYPE_REPORT'							=> 'Neko je prijavio post',
	'NOTIFICATION_TYPE_TOPIC'							=> 'Neko je postavio temu u forumu koji pratite',
	'NOTIFICATION_TYPE_ADMIN_ACTIVATE_USER'				=> 'Novoregistrovani korisnik čeka na aktivaciju',
	'NOTIFY_METHOD'					=> 'Metod obaveštenja',
	'NOTIFY_METHOD_BOTH'			=> 'Oba',
	'NOTIFY_METHOD_EMAIL'			=> 'Samo email-om',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metod za slanje poruka putem ovog boarda.',
	'NOTIFY_METHOD_IM'				=> 'Samo Jabber',
	'NOTIFY_ON_PM'					=> 'Obavesti me o novim privatnim porukama',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Ne možete dodati anonimne korisnike u vašu listu prijatelja.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Ne možete dodati anonimne korisnike u vašu listu prijatelja koji su već na listi vaših protivnika',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Ne možete dodati sami sebe u listu prijatelja',
	'NOT_ADDED_FRIENDS_BOTS'   =>  'Ne možete dodati botove na vašu listu prijatelja.',
  'NOT_ADDED_FOES_BOTS'     =>  'Ne možete dodati botove na vašu listu protivnika.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Ne možete dodati administratore i moderatore u vašu listu protivnika.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Ne možete dodati anonimnog korisnika u vašu listu protivnika.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Ne možete dodati anonimnog korisnika u vašu listu protivnika koji je već u vašoj listi prijatelja.',
	'NOT_ADDED_FOES_SELF'			=> 'Ne možete dodati sami sebe na listu protivnika.',
	'NOT_AGREE'						=> 'Ne slažem se sa ovim uslovima',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Odredišni folder “%s” je verovatno pun. Zahtevana akcija nije izvršena.',
	'NOT_MOVED_MESSAGES'			=> array(
		1	=> 'Imate %d privatnu poruku na čekanju jer je folder pun.',
		2	=> 'Imate %d privatnih poruka na čekanju jer je folder pun.',
	),
	'NO_ACTION_MODE'				=> 'Niste izabrali akciju poruke.',
	'NO_AUTHOR'						=> 'Nema definisanog autora ove poruke',
	'NO_AVATAR_CATEGORY'			=> 'Nema',
	'NO_AVATAR'						=> 'Niste izabrali avatar',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Niste autorizovani da brišete privatne poruke.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Niste autorizovani da menjate privatne poruke.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Niste autorizovani da prosleđujete privatne poruke.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Niste autorizovani da šaljete privatne poruke u grupe.',
	'NO_AUTH_PROFILEINFO'			=> 'Niste autorizovani da menjati informacije o profilu.',
	'NO_AUTH_READ_MESSAGE'			=> 'Niste autorizovani da čitate privatne poruke.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Niste u mogućnosti da pročitate ovu poruku jer je uklonjena od stranje njenog autora.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Niste autorizovani da šaljete privatne poruke.',
	'NO_AUTH_SIGNATURE'				=> 'Niste autorizovani da definišete potpis',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Niste autorizovani da zatražite novu šifru.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Niste autorizovani da čitate privatne poruke koje su na čekanju.',

	'NO_BCC_RECIPIENT'			=> 'Ništa',
	'NO_BOOKMARKS'				=> 'Nemate beleške',
	'NO_BOOKMARKS_SELECTED'		=> 'Niste izabrali ni jednu belešku',
	'NO_EDIT_READ_MESSAGE'		=> 'Privatna poruka ne može biti izmenjena jer je već pročitana.',
	'NO_EMAIL_USER'				=> 'Informacija o Email-u/korisničkom imenu ne može biti pronađena',
	'NO_FOES'					=> 'Trenutno nemate definisanih protivnika',
	'NO_FRIENDS'				=> 'Trenutno nemate definisanih prijatelja',
	'NO_FRIENDS_OFFLINE'		=> 'Nema OffLine prijatelja',
	'NO_FRIENDS_ONLINE'			=> 'Nema OnLine prijatelja',
	'NO_GROUP_SELECTED'			=> 'Niste izabrali grupu',
	'NO_IMPORTANT_NEWS'			=> 'Nema važnih obaveštenja',
	'NO_MESSAGE'				=> 'Privatna poruka ne može biti pronađena',
	'NO_NEW_FOLDER_NAME'		=> 'Morate odrediti ime novog foldera',
	'NO_NEWER_PM'				=> 'Nema novijih poruka',
	'NO_OLDER_PM'				=> 'Nema starijih poruka',
	'NO_PASSWORD_SUPPLIED'		=> 'Ne možete se prijaviti bez šifre.',
	'NO_RECIPIENT'				=> 'Niste definisali primaoca',
	'NO_RULES_DEFINED'			=> 'Nema definisanih pravila',
	'NO_SAVED_DRAFTS'			=> 'Nema sačuvanih nacrta',
	'NO_TO_RECIPIENT'			=> 'Niko',
	'NO_WATCHED_FORUMS'			=> 'Ne pratite ni jedan forum.',
	'NO_WATCHED_TOPICS'			=> 'Ne pratite ni jednu temu.',
	'NO_WATCHED_SELECTED'		=> 'Niste izabrali nijednu temu ili forume za praćenje.',

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Šifra mora biti između %1$s i %2$s karaktera dugačka i mora sadržati alfanumeričke karaktere',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Mora biti između %1$s i %2$s karaktera.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Šifra mora biti između %1$s i %2$s karaktera dugačka i mora sadržati velika i mala slova',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Šifra mora biti između %1$s i %2$s karaktera dugačka i mora sadržati simbole',
	'PASSWORD'					=> 'Šifra',
	'PASSWORD_ACTIVATED'		=> 'Vaša nova šifra je aktivirana',
	'PASSWORD_UPDATED'			=> 'Vaša šifra je uspešno poslata na vašu originalnu email adresu.',
	'PERMISSIONS_RESTORED'		=> 'Uspešno ste povratili originalne dozvole.',
	'PERMISSIONS_TRANSFERRED'	=> 'Uspešno ste prebacili dozvole iz <strong>%s</strong>, sada ste u mogućnosti da pregledate forum sa dozvolama korisnika.<br />Znajte da dozvole administratora nisu prenete. U mogućnosti ste da se vratite na vaš set dozvola bilo kada.',
	'PM_DISABLED'				=> 'Privatne poruke su onemogućene na ovom boardu',
	'PM_FROM'					=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ovu poruku je poslao korisnik koji više nije registrovan.',
	'PM_ICON'					=> 'Ikonica PP',
	'PM_INBOX'					=> 'Prijemno sanduče',
	'PM_MARK_ALL_READ'			=> 'Obečeži sve poruke kao pročitane',
	'PM_MARK_ALL_READ_SUCCESS'	=> 'Sve privatne poruke u ovom folderu su obeležene kao pročitane',
	'PM_NO_USERS'				=> 'Zahtevani korisnici koje želite da dodate ne postoje.',
	'PM_OUTBOX'					=> 'Za slanje',
	'PM_SENTBOX'				=> 'Poslate poruke',
	'PM_SUBJECT'				=> 'Tema poruke',
	'PM_TO'						=> 'Pošalji za',
	'PM_TOOLS'					=> 'Alatke za poruke',
	'PM_USERS_REMOVED_NO_PERMISSION'	=> 'Neki korisnici ne mogu biti dodati jer nemaju dozvolu da čitaju privatne poruke.',
	'PM_USERS_REMOVED_NO_PM'	=> 'Neki korisnici ne mogu biti dodati jer su onemogućili privatne poruke.',
	'POST_EDIT_PM'				=> 'Izmeni poruku',
	'POST_FORWARD_PM'			=> 'Prosledi poruku',
	'POST_NEW_PM'				=> 'Pošalji poruku',
	'POST_PM_LOCKED'			=> 'Privatne poruke su zaključane',
	'POST_PM_POST'				=> 'Citiraj post',
	'POST_QUOTE_PM'				=> 'Citiraj poruku',
	'POST_REPLY_PM'				=> 'Odgovori na poruku',
	'PRINT_PM'					=> 'Pregled za štampanje',
	'PREFERENCES_UPDATED'		=> 'Vaša podešavanja su ažurirana.',
	'PROFILE_INFO_NOTICE'		=> 'Znajte da će ove informacije biti vidljive ostalim korisnicima. Budite pažljivi kada pišete bilo kakve lične detalje. Sva polja označena sa * moraju biti popunjena.',
	'PROFILE_UPDATED'			=> 'Vaš profil je ažuriran.',
	'PROFILE_AUTOLOGIN_KEYS'	=> '"Zapamti me" ključevi za prijavu Vas automatski prijavljuju kada posetite board. Ako se odjavite, ključ je obrisan samo na kompjuteru koji ste koristili da se odjavite. Ovde možete videti ključeve napravljene na drugim kompjuterima koje ste koristili za pristup ovom sajtu.',
	'PROFILE_NO_AUTOLOGIN_KEYS'	=> 'Nema sačuvanih "Zapamti me" ključeva za prijavu.',

	'RECIPIENT'							=> 'Primaoc',
	'RECIPIENTS'						=> 'Primaoci',
	'REGISTRATION'						=> 'Registracija',
	'RELEASE_MESSAGES'					=> '%sPusti sve poruke koje su na čekanju%s… one će biti spakovane u odgovarajući folder ako ima dovoljno mesta.',
	'REMOVE_ADDRESS'					=> 'Ukloni adresu',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Ukloni izabrane beleške',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Da li ste sigurni da želite da uklonite sve izabrane beleške?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Ukloni obeležene beleške',
	'REMOVE_FOLDER'						=> 'Ukloni folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Da li ste sigurni da želite da uklonite ovaj folder?',
	'RENAME'							=> 'Preimenuj',
	'RENAME_FOLDER'						=> 'Preimenuj folder',
	'REPLIED_MESSAGE'					=> 'Odgovoreno na poruku',
	'REPLY_TO_ALL'           			=>  'Odgovori pošaljiocu i svim primaocima.',
	'REPORT_PM'              			=>  'Prijavi privatnu poruku',
	'RESIGN_SELECTED'					=> 'Otkaži izabrano',
	'RETURN_FOLDER'						=> '%1$sPovratak u prethodni folder%2$s',
	'RETURN_UCP'						=> '%sPovratak u Korisnički Kontrolni Panel%s',
	'RULE_ADDED'						=> 'Pravilo uspešno dodato',
	'RULE_ALREADY_DEFINED'				=> 'Ovo pravilo je prethodno definisano',
	'RULE_DELETED'						=> 'Pravilo uspešno uklonjeno',
	'RULE_LIMIT_REACHED'				=> 'Ne možete dodati više pravila za privatne poruke. Ispunili ste maksimalan broj pravila.',
	'RULE_NOT_DEFINED'					=> 'Pravilo nije ispravno određeno',
	'RULE_REMOVED_MESSAGES'				=> array(
		1	=> '%d privatna poruka je uklonjena zbog filtera privatnih poruka.',
		2	=> '%d privatne poruke su uklonjene zbog filtera privatnih poruka.',
	),

	'SAME_PASSWORD_ERROR'		=> 'Nova šifra koju ste uneli je ista kao i vaša trenutna šifra',
	'SEARCH_YOUR_POSTS'			=> 'Prikaži moje postove',
	'SEND_PASSWORD'				=> 'Pošalji šifru',
	'SENT_AT'					=> 'Polato na',
	'SELECT_CURRENT_TIME'		=> 'Izaberite trenutno vreme',
	'SELECT_TIMEZONE'			=> 'Izaberite vremensku zonu',
	'SHOW_EMAIL'				=> 'Korisnici me mogu kontaktirati putem email-a',
	'SIGNATURE_EXPLAIN'			=> 'Ovo je blok teksta koji može biti dodat u vaše postove. Postoji limit od %d karaktera',
	'SIGNATURE_PREVIEW'			=> 'Vaš potpis će se ovako prikazivati u postovima',
	'SIGNATURE_TOO_LONG'		=> 'Vaš potpis je predugačak.',
	'SORT'						=> 'Sortiraj',
	'SORT_COMMENT'				=> 'Komentar fajla',
	'SORT_DOWNLOADS'			=> 'Preuzimanja',
	'SORT_EXTENSION'			=> 'Ekstenzija',
	'SORT_FILENAME'				=> 'Naziv fajla',
	'SORT_POST_TIME'			=> 'Vreme posta',
	'SORT_SIZE'					=> 'Veličina fajla',

	'TIMEZONE'					=> 'Vremenska zona',
	'TIMEZONE_DATE_SUGGESTION'	=> 'Predlog: %s',
	'TIMEZONE_INVALID'			=> 'Vremenska zona koju ste izabrali je nepravilna.',
	'TO'						=> 'Za',
	'TO_MASS'					=> 'Primaoci',
	'TO_ADD'					=> 'Dodaj primaoca',
	'TO_ADD_MASS'				=> 'Dodaj primaoce',
	'TO_ADD_GROUPS'				=> 'Dodaj grupe',
	'TOO_MANY_RECIPIENTS'		=> 'Previše primaoca',
	'TOO_MANY_REGISTERS'		=> 'Dostigli ste maksimalni dozvoljeni broj porušaja registracije za ovu sesiju. Molimo vas da pokušate kasnije.',

	'UCP'						=> 'Korisnički Kontrolni Panel',
	'UCP_ACTIVATE'				=> 'Aktiviraj nalog',
	'UCP_ADMIN_ACTIVATE'		=> 'Znajte da ćete morati da unesete ispravnu email adresu pre nego što vaš nalog bude aktiviran. Administrator će razmotriti vaš nalog i ako ga odobri dobićete email na adresu koju ste uneli.',
	'UCP_ATTACHMENTS'			=> 'Prikačeni fajlovi',
	'UCP_AUTH_LINK'				=> 'Spoljni nalozi',
	'UCP_AUTH_LINK_ASK'			=> 'Trenutno nemate nalog asociran sa ovim spoljnim servisom. Kliknite na dugme ispod da povežete Vaš nalog na boardu sa nalogom na ovom spoljnom servisu.',
	'UCP_AUTH_LINK_ID'			=> 'Unikatni prepoznavalac',
	'UCP_AUTH_LINK_LINK'		=> 'Link',
	'UCP_AUTH_LINK_MANAGE'		=> 'Upravljanje asocijacijama spoljnih naloga',
	'UCP_AUTH_LINK_NOT_SUPPORTED'	=> 'Povezivanje board naloga sa spoljnim servisima neje podržano sa trenutnim podešavanjem metode autorizacije na ovom boardu.',
	'UCP_AUTH_LINK_TITLE'		=> 'Upravljaj asocijacijama ka svojim spoljnim nalozima',
	'UCP_AUTH_LINK_UNLINK'		=> 'Prekini vezu',
	'UCP_COPPA_BEFORE'			=> 'Pre %s',
	'UCP_COPPA_ON_AFTER'		=> 'Na ili Posle %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Znajte da ćete morati da unesete ispravnu email adresu pre nego što vaš nalog bude aktiviran. Dobićete email na adresu koju ste uneli koji sadrži link za aktivaciju naloga.',
	'UCP_JABBER'				=> 'Jabber adresa',
	
	'UCP_LOGIN_LINK'			=> 'Podesi asocijaciju sa spoljnim nalogom',

	'UCP_MAIN'					=> 'Pregled',
	'UCP_MAIN_ATTACHMENTS'		=> 'Rad sa prikačenim fajlovima',
	'UCP_MAIN_BOOKMARKS'		=> 'Rad sa beleškama',
	'UCP_MAIN_DRAFTS'			=> 'Rad sa nacrtima',
	'UCP_MAIN_FRONT'			=> 'Glavna strana',
	'UCP_MAIN_SUBSCRIBED'		=> 'Rad sa prijavama',

	'UCP_NO_ATTACHMENTS'		=> 'Niste poslali ni jedan fajl',
	
	'UCP_NOTIFICATION_LIST'				=> 'Upravljaj obaveštenjima',
	'UCP_NOTIFICATION_LIST_EXPLAIN'		=> 'Ovde možete pogledati sva ranija obaveštenja.',
	'UCP_NOTIFICATION_OPTIONS'			=> 'Izmeni opcije obaveštenja',
	'UCP_NOTIFICATION_OPTIONS_EXPLAIN'	=> 'Ovde možete podesiti željena obaveštenja za board.',

	'UCP_PREFS'					=> 'Podešavanja foruma',
	'UCP_PREFS_PERSONAL'		=> 'Izmeni globalna podešavanja',
	'UCP_PREFS_POST'			=> 'Izmeni podrazumevana podešavanja posta',
	'UCP_PREFS_VIEW'			=> 'Izmeni opcije prikaza',
	
	'UCP_PM'					=> 'Privatne poruke',
	'UCP_PM_COMPOSE'			=> 'Napiši poruku',
	'UCP_PM_DRAFTS'				=> 'Rad sa nacrtima PP',
	'UCP_PM_OPTIONS'			=> 'Izmeni opcije',
	'UCP_PM_UNREAD'				=> 'Nepročitane poruke',
	'UCP_PM_VIEW'				=> 'Pregled poruka',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Izmeni avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Izmeni profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Izmeni podešavanja naloga',
	'UCP_PROFILE_SIGNATURE'		=> 'Izmeni potpis',
	'UCP_PROFILE_AUTOLOGIN_KEYS'=> 'Upravljaj “Zapamti me” ključevima za prijavu',

	'UCP_USERGROUPS'			=> 'Korisničke grupe',
	'UCP_USERGROUPS_MEMBER'		=> 'Izmeni članstvo',
	'UCP_USERGROUPS_MANAGE'		=> 'Rad sa grupama',

	'UCP_PASSWORD_RESET_DISABLED'	=> 'Opcija za resetovanje lozinke je isključena. Ukoliko Vam treba pomoć oko pristupa Vašem nalogu, kontaktirajte %sAdministratora boarda%s',
	
	'UCP_REGISTER_DISABLE'			=> 'Kreiranje novog nalog trenutno nije moguće.',
	'UCP_REMIND'					=> 'Pošalji šifru',
	'UCP_RESEND'					=> 'Pošalji aktivacioni email',
	'UCP_WELCOME'					=> 'Dobrodošli na Korisnički Kontrolni Panel. Odavde možete pratiti, pogledati ili izmeniti vaš profil, podešavanja, prijave na forume i teme. Možete takođe slati poruke drugim korisnicima (ako je omogućeno). Molimo vas da pročitate sva obaveštenja pre nego što nastavite.',
	'UCP_ZEBRA'						=> 'Prijatelji &amp; Protivnici',
	'UCP_ZEBRA_FOES'				=> 'Rad sa protivnicima',
	'UCP_ZEBRA_FRIENDS'				=> 'Rad sa prijateljima',
	'UNDISCLOSED_RECIPIENT'  =>  'Neobjavljeni primaoc',
	'UNKNOWN_FOLDER'				=> 'Nepoznat folder',
	'UNWATCH_MARKED'				=> 'Prekini praćenje obeleženih',
	'UPLOAD_AVATAR_FILE'			=> 'Slanje sa vašeg kompjutera',
	'UPLOAD_AVATAR_URL'				=> 'Slanje sa URL-a',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Unesite URL lokacije koja sadrži sliku, i ona će biti kopirana na ovaj sajt.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Korisničko ime mora biti između %1$s i %2$s karaktera dugačko i koristite samo alfanumeričke karaktere',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Korisničko ime mora biti između %1$s i %2$s karaktera dugačko i koristite alfanumeričke, razmake ili -+_[] karaktere.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Dužina mora biti između %1$s i %2$s karaktera.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Korisničko ime mora biti između %1$s i %2$s karaktera i možete koristiti samo ASCII karaktere, dakle ne i specijalne karaktere.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Korisničko ime mora biti između %1$s i %2$s karaktera i možete koristiti samo slova i brojke.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Korisničko ime mora biti između %1$s i %2$s karaktera dugačko i možete koristiti slova, brojeve, razmak i -+_[] karaktere.',
	'USERNAME_TAKEN_USERNAME'		=> 'Korisničko ime koje ste uneli se već koristi, molimo vas da izaberete drugo.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Korisničko ime koje ste uneli je zabranjeno.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Korisnička imena koja ste uneli ili ne mogu biti pronađena nisu aktivirani korisnici.',

	'VC_REFRESH'           =>  'Regeneriši kod za potvrdu',
  'VC_REFRESH_EXPLAIN'   =>  'Ako ne možete da pročitate kod možete zatražiti novi tako što ćete kliknuti na dugme.',
  'VIEW_AVATARS'				=> 'Prikaži avatare',
	'VIEW_EDIT'					=> 'Pregled/izmena',
	'VIEW_FLASH'				=> 'Prikaži Flash animacije',
	'VIEW_IMAGES'				=> 'Prikaži slike u postovima',
	'VIEW_NEXT_HISTORY'			=> 'Sledeća PP po istoriji',
	'VIEW_NEXT_PM'				=> 'Sledeća PP',
	'VIEW_PM'					=> 'Pregled poruke',
	'VIEW_PM_INFO'				=> 'Detalji poruke',
	'VIEW_PM_MESSAGES'			=> array(
		1	=> '%d poruka',
		2	=> '%d poruke',
	),
	'VIEW_PREVIOUS_HISTORY'		=> 'Prethodna PP u istoriji',
	'VIEW_PREVIOUS_PM'			=> 'Prethodna PP',
	'VIEW_PROFILE'				=> 'Pogledaj profil',
	'VIEW_SIGS'					=> 'Prikaži potpise',
	'VIEW_SMILIES'				=> 'Prikaži smajlije kao sličice',
	'VIEW_TOPICS_DAYS'			=> 'Prikaži teme iz prethodnih dana',
	'VIEW_TOPICS_DIR'			=> 'Prikaži smer ređanja tema',
	'VIEW_TOPICS_KEY'			=> 'Prikaži teme sortirane po',
	'VIEW_POSTS_DAYS'			=> 'Prikaži postove iz prethodnih dana',
	'VIEW_POSTS_DIR'			=> 'Prikaži smer ređanja postova',
	'VIEW_POSTS_KEY'			=> 'Prikaži postove sortirane po',

	'WATCHED_EXPLAIN'			=> 'Iznad je lista foruma i tema koje pratite. Boćete obavešteni o novim postovima u njima. Da bi prestali sa praćenjem, obeležite forum ili temu i onda pritisnite <em>Prekini praćenje</em> dugme.',
	'WATCHED_FORUMS'			=> 'Praćeni forumi',
	'WATCHED_TOPICS'			=> 'Praćene teme',
	'WRONG_ACTIVATION'			=> 'Aktivacioni ključ koji ste priložili se ne poklapa ni sa jednim u našoj bazi',

	'YOUR_DETAILS'				=> 'Vaša aktivnost',
	'YOUR_FOES'					=> 'Vaši protivnici',
	'YOUR_FOES_EXPLAIN'			=> 'Da bi uklonili korisnička imena izaberite ih a onda kliknite na Ukloni',
	'YOUR_FRIENDS'				=> 'Vaši prijatelji',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Da bi uklonili korisnička imena izaberite ih a onda kliknite na Ukloni',
	'YOUR_WARNINGS'				=> 'Vaš nivo upozorenja',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Postavite u folder',
		'MARK_AS_READ'		=> 'Obeleži kao pročitano',
		'MARK_AS_IMPORTANT'	=> 'Obeleži poruku',
		'DELETE_MESSAGE'	=> 'Obriši poruku'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Tema',
		'SENDER'	=> 'Pošaljioc',
		'MESSAGE'	=> 'Poruka',
		'STATUS'	=> 'Status poruke',
		'TO'		=> 'Poslata za'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'je kao',
		'IS_NOT_LIKE'	=> 'nije kao',
		'IS'			=> 'je',
		'IS_NOT'		=> 'nije',
		'BEGINS_WITH'	=> 'počinje sa',
		'ENDS_WITH'		=> 'završava se sa',
		'IS_FRIEND'		=> 'je prijatelj',
		'IS_FOE'		=> 'je protivnik',
		'IS_USER'		=> 'je korisnik',
		'IS_GROUP'		=> 'je u korisničkoj grupi',
		'ANSWERED'		=> 'odgovorio',
		'FORWARDED'		=> 'prosleđena',
		'TO_GROUP'		=> 'u moju podrazumevanu korisničku grupu',
		'TO_ME'			=> 'za mene'
	),


	'GROUPS_EXPLAIN'	=> 'Korisničke grupe omogućavaju administratorima boarda da bolje upravljaju korisnicima. Standardno ćete biti ubačeni u određenu grupu, i to je vaša podrazumevana grupa. Ova grupa definiše kako se možete predstaviti drugim korisnicima, na primer boja vašeg korisničkog imena, avatar, čin, itd. U zavisnosti da li administrator dozvoljava, možete biti u mogućnosti da promenite vašu podrazumevanu grupu. Možete takođe biti postavljeni ili vam bude omogućeno da se priključite drugim grupama. Neke grupe vam mogu dati i dodatna prava za pregled sadržaja ili da povećaju vaše mogućnosti u drugim oblastima.',
	'GROUP_LEADER'		=> 'Vođstvo',
	'GROUP_MEMBER'		=> 'Članstvo',
	'GROUP_PENDING'		=> 'Članstva u razmatranju',
	'GROUP_NONMEMBER'	=> 'Ne-članstvo',
	'GROUP_DETAILS'		=> 'Detalji grupe',

	'NO_LEADER'		=> 'Nema vođstva grupe',
	'NO_MEMBER'		=> 'Nema članstva grupe',
	'NO_PENDING'	=> 'Nema razmatranih članstva',
	'NO_NONMEMBER'	=> 'Nema grupa bez članova',
));
