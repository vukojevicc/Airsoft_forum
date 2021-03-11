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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Uvod'
	),
	array(
		0 => 'Šta je BBKod?',
		1 => 'BBKod je specijalna implementacija HTML-a. Da li možete koristiti BBKod u vašim porukama na forumu određuje administrator. Možete onemogućiti BBKod na formi za slanje poruka. BBKod sam po sebi je sličan stilu u HTML, tagovi su umetnuti u vitičastim zagradama [ i ] radije nego &lt; i &gt; i nudi veću kontrolu kako je nešto prikazano. U zavisnosti od podloge koju koristite videćete da je dodavanje BBKoda vašim porukama mnogo lakške kliktanjem miša na polja iznad poruke na formi za unos poruka. Čak i sa tim možda će vam ovaj vodič biti od koristi.'
	),
	array(
		0 => '--',
		1 => 'Formatiranje teksta'
	),
	array(
		0 => 'Kako napisati podebljan, kosi i podvučeni tekst',
		1 => 'BBKod sadrži tagove koji Vam omogućuju da brzo promenite osnovne stilove teksta. Ovo se postiže na sledeće načine: <ul><li>Da bi deo teksta bio podebljan, okružite ga u <strong>[b][/b]</strong>, npr. <br /><br /><strong>[b]</strong>Zdravo<strong>[/b]</strong><br /><br />će postati <strong>Zdravo</strong></li><li>Za podvlačenje koristite <strong>[u][/u]</strong>, na primer:<br /><br /><strong>[u]</strong>Dobro Jutro<strong>[/u]</strong><br /><br />postaje <span style="text-decoration: underline">Dobro Jutro</span></li><li>Za iskošena slova koristite <strong>[i][/i]</strong>, npr.<br /><br />Ovo je <strong>[i]</strong>Sjajno!<strong>[/i]</strong><br /><br /> daje Ovo je <i>Sjajno!</i></li></ul>'
	),
	array(
		0 => 'Kako da promenim boju teksta ili veličinu',
		1 => 'Da bi ste izmenili boju ili veličinu teksta možete koristiti sledeće tagove. Zapamtite da će krajnji rezujtat zavisiti od browsera čitača i sistema: <ul><li>Menjanje boje teksta moguće je tako što ćete ga umetnuti u <strong>[color=][/color]</strong>. Možete odrediti prepoznatljiv naziv boje (npr. crvena, plava, žuta, itd.) ili u heksadecimalnom obliku, npr. #FFFFFF, #000000. Na primer, za crveni tekst koristite:<br /><br /><strong>[color=red]</strong>Zdravo!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Zdravo!<strong>[/color]</strong><br /><br />Oba će ispisati <span style="color:red">Zdravo!</span></li><li>Menjane veličine teksta se ostvaruje tako što se koristi <strong>[size=][/size]</strong>. Ovaj tag zavisi od teme koju je korisnik izabrao ali preporučeni format je numerička vrednost koja predstavlja veličinu teksta u procentima počevši od 20 (veoma mala) do 200 (veoma velika). Na primer:<br /><br /><strong>[size=30]</strong>MALA<strong>[/size]</strong><br /><br />će generalno biti <span style="font-size:30%;">MALA</span><br /><br />dok će:<br /><br /><strong>[size=200]</strong>VELIKA!<strong>[/size]</strong><br /><br />biti <span style="font-size:200%;">VELIKA!</span></li></ul>'
	),
	array(
		0 => 'Da li mogu da kombinujem tagove za formatiranje',
		1 => 'Da, naravno da možete, na primer da biste privukli pažnju možete pisati:<br /><br /><strong>[size=200][color=red][b]</strong>POGLEDAJ ME!<strong>[/b][/color][/size]</strong><br /><br />ovo će ispisati <span style="color:red;font-size:200%;"><strong>POGLEDAJ ME!</strong></span><br /><br />Ne preporučujemo da ispisujete puno teksta koji ovako izgleda! Znajte da je na Vama da osigurate da su tagovi pravilno zatvoreni. Na primer, ovo je nepravilno:<br /><br /><strong>[b][u]</strong>Ovo je pogrešno<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citiranje i dobijanje teksta fiksne širine'
	),
	array(
		0 => 'Citiranje teksta u odgovorima',
		1 => 'Postoje dva načina kojima možete citirati tekst, sa ili bez reference.<ul><li>Kada koristite Quote funkciju za odgovor na poruku primetićete da je tekst poruke dodat u prozoru poruke umetnut u <strong>[quote=\"\"][/quote]</strong> bloku. Ovaj metod vam omogućava da citirate sa referencom na osobu ili bilo šta drugo što želite da stavite! Na primer da biste citirali deo teksta Mr. Bloby upišite:<br /><br /><strong>[quote=\"Mr. Blobby\"]</strong>Tekst Mr. Blobby koji ste napisali će otići ovde<strong>[/quote]</strong><br /><br />Rezultujuća poruka će automatski dodati, Mr. Blobby wrote: pre samog teksta. Zapamtite da <strong>morate</strong> ubaciti zagrade \"\" oko imena koga citirate, jer nisu opcione.</li><li>Drugi metod vam omogućava da slepo citirate nešto. Da biste ovo iskoristili umetnite tekst u <strong>[quote][/quote]</strong> tagove. Kada pogledate poruku jednostavno će se prikazati, Quote: pre samog teksta.</li></ul>'
	),
	array(
		0 => 'Dobijanje koda ili podatke fiksne širine',
		1 => 'Ako želite da prikažete deo koda ili u stvari bilo šta što zahteva fiksnu širinu, npr. Courier font - treba umetnuti tekst u <strong>[code][/code]</strong> tagove, npr.<br /><br /><strong>[code]</strong>echo \"Ovo je neki kod\";<strong>[/code]</strong><br /><br />Sva formatiranja korišæena između <strong>[code][/code]</strong> tagova su zapamćena kada ih kasnije pogledate.'
	),
	array(
		0 => '--',
		1 => 'Generisanje lista'
	),
	array(
		0 => 'Pravljenje nesređene liste',
		1 => 'BBKod podržava dva tipa lista, nesređene i sređene. One su bitne isto koliko i njihova HTML zamena. Nesređena lista daje svaku stavku dosledno jednu za drugom drugom uvlačeći svaku stavku. Da biste napravili nesređenu lisu koristite <strong>[list][/list]</strong> i definišite svaku stavku liste koristeći <strong>[*]</strong>. Na primer da biste izlistali vaše omiljene boje koristite:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Crvena<br /><strong>[*]</strong>Plava<br /><strong>[*]</strong>Žuta<br /><strong>[/list]</strong><br /><br />Ovim se dobija sledeća lista:<ul><li>Crvena</li><li>Plava</li><li>Žuta</li></ul>");'
	),
	array(
		0 => 'Pravljenje sređene liste',
		1 => 'Drugi tip liste, sređena lista daje vam kontrolu kakav će biti ispis pre svake stavke. Da biste napravili sređenu listu koristite <strong>[list=1][/list]</strong> na napravite rednu listu ili <strong>[list=a][/list]</strong> za abecendu listu. Kao i kod nesređene liste, stavke su određene korišćenjem <strong>[*]</strong>. Na primer:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Idite u kupovinu<br /><strong>[*]</strong>Kupite novi kompjuter<br /><strong>[*]</strong>Izderite se na kompjuter kada ne radi<br /><strong>[/list]</strong><br /><br />će dati sledeće:<ol style="list-style-type: decimal;"><li>Idite u kupovinu</li><li>Kupite novi kompjuter</li><li>Izderite se na komjuter kada ne radi</li></ol>Dok za abecednu listu koristite:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Prvi mogući odgovor<br /><strong>[*]</strong>Drugi mogući odgovor<br /><strong>[*]</strong>Treći mogući odgovor<br /><strong>[/list]</strong><br /><br />daje<ol style="list-style-type: lower-alpha"><li>Prvi mogući odgovor</li><li>Drugi mogući odgovor</li><li>Treći mogući odgovor</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Pravljenje linkova'
	),
	array(
		0 => 'Link na drugi sajt',
		1 => 'phpBB BBKod ima više načina da napravite URI-e, Uniform Resource Indicators poznatije kao URLs.<ul><li>Prvi od njih koristi <strong>[url=][/url]</strong> tag, šta god ukucali posle = znaka će prouzrokovati da se sadržaj taga ponaša kao URL. Na primer da bi ste linkovali na phpBB.com koristite:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Posetite phpBB!<strong>[/url]</strong><br /><br />Ovo će generisati sledeći link, <a href="http://www.phpbb.com/">Posetite phpBB!</a> Primetićete da se link otvara u novom prozoru pa korisnik može nastaviti rad na forumu ako želi.</li><li>Ako želite da se URL prikaže kao link možete to jednostavno izvesti koristeći:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Ovo će generisati sledeći link, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Dodatne phpBB mogućnosti zvane <i>Magični linkovi</i>, će pretvoriti svaki sintaksno tačan URL u link bez potrebe da definišete bilo kakav tag ili čak i prefiks http://. Na primer kucanjem www.phpbb.com u vašoj poruci automatski dobijate <a href="http://www.phpbb.com/">www.phpbb.com</a> kada pogledate poruku.</li><li>Isto se dešava i sa email adresama, možete ili naznačiti adresu na primer:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />što će rezultovati <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> ili možete jednostavno uneti no.one@domain.adr u vašoj poruci i biće automatski konvertovano kada pogledate poruku.</li></ul>Kao što sa svim BBKod tagovima možete umotati URLs oko bilo kojeg taga kao što je <strong>[img][/img]</strong> (Vidi sledeći pasus), <strong>[b][/b]</strong>, itd. tako i sa tagovima za formatiranje morate paziti da se pravilno zatvore, na primer:<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/images/phplogo.gif<strong>[/url][/img]</strong><br /><br /><u>nije</u> tačno što može dovesti da se vaša poruka izbriše pa zato pazite.'
	),
	array(
		0 => '--',
		1 => 'Prikazivanje slika u porukama'
	),
	array(
		0 => 'Dodavanje slike u poruku',
		1 => 'phpBB BBKod sadrži tag za ubacivanje slika u vaše poruke. Dve vrlo važne stvari koje trebate da upamtite prilikom korišćenja ovog taga su: mnogi korisnici ne cene puno slika u porukama i drugo slika koju prikazujete mora već biti dostupna na internetu (ne može postojati na vašem kompjuteru na primer, osim ako nemate web server!). Da biste prikazali sliku morate okružiti URL koji vodi do slike sa <strong>[img][/img]</strong> tagovima. Na primer:<br /><br /><strong>[img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Kao što je naglašeno u URL delu iznad možete okružiti sliku sa <strong>[url][/url]</strong> tagom ukoliko želite, npr.<br /><br /><strong>[url=http://www.phpbb.com/][img]</strong>http://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />daje:<br /><br /><a href="http://www.phpbb.com/"></a>'
	),
	array(
		0 => 'Dodavanje prikačenih fajlova u post',
		1 => 'Prikačeni fajlovi se sada mogu dodati u bilo koji deo posta koristeći novi <strong>[attachment=][/attachment]</strong> BBKod, ukoliko je ova funkcija uključena od strane administratora i ako imate odgovarajuće dozvole da ostavljate prikačene fajlove. U okviru ekrana za pisanje je drop-down opcija (prikazana kao dugme) za ubacivanje prikačenih fajlova.'
	),
	array(
		0 => '--',
		1 => 'Ostalo'
	),
	array(
		0 => 'Mogu li da dodam sopstvene tagove?',
		1 => 'Ne, bar ne direktno u verziji phpBB 2.0. Gledaćemo da ponudimo proizvoljne tagove u sledećoj verziji'
	)
);
