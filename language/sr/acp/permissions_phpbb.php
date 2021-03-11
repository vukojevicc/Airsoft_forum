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

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a seperate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> 'Can post bugs', // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
		'ACL_CAT_ACTIONS'		=> 'Akcije',
		'ACL_CAT_CONTENT'		=> 'Sadržaj',
		'ACL_CAT_FORUMS'		=> 'Forumi',
		'ACL_CAT_MISC'			=> 'Razno',
		'ACL_CAT_PERMISSIONS'	=> 'Dozvole',
		'ACL_CAT_PM'			=> 'Privatne poruke',
		'ACL_CAT_POLLS'			=> 'Glasanja',
		'ACL_CAT_POST'			=> 'Post',
		'ACL_CAT_POST_ACTIONS'	=> 'Akcije postova',
		'ACL_CAT_POSTING'		=> 'Postovanje',
		'ACL_CAT_PROFILE'		=> 'Profil',
		'ACL_CAT_SETTINGS'		=> 'Podešavanja',
		'ACL_CAT_TOPIC_ACTIONS'	=> 'Akcije tema',
		'ACL_CAT_USER_GROUP'	=> 'Korisnici &amp; Grupe',
	));



// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Može gledati profile, listučlanova i online listu',
	'ACL_U_CHGNAME'		=> 'Može promeniti korisničko ime',
	'ACL_U_CHGPASSWD'	=> 'može promeniti lozinku',
	'ACL_U_CHGEMAIL'	=> 'Može promeniti email adresu',
	'ACL_U_CHGAVATAR'	=> 'Može promeniti avatar',
	'ACL_U_CHGGRP'		=> 'Može promeniti podrazumevanu korisničku grupu',
	'ACL_U_CHGPROFILEINFO'	=> 'Može promeniti informacije o profilu',

	'ACL_U_ATTACH'		=> 'Može prikačiti fajlove',
	'ACL_U_DOWNLOAD'	=> 'Može preuzimati fajlove',
	'ACL_U_SAVEDRAFTS'	=> 'Može snimiti beleške',
	'ACL_U_CHGCENSORS'	=> 'Može isključiti cenzurisane reči',
	'ACL_U_SIG'			=> 'Može koristiti potpise',

	'ACL_U_SENDPM'		=> 'Može slati privatne poruke',
	'ACL_U_MASSPM'		=> 'Može slati privatne poruke za više korisnika ili grupa',
	'ACL_U_MASSPM_GROUP'=> 'Može slati poruke grupama',
	'ACL_U_READPM'		=> 'Može da čita privatne poruke',
	'ACL_U_PM_EDIT'		=> 'Može da izmeni sopstvene privatne poruke',
	'ACL_U_PM_DELETE'	=> 'Može ukloniti privatne poruke iz sopstvenog foldera',
	'ACL_U_PM_FORWARD'	=> 'Može da prosleđuje privatne poruke',
	'ACL_U_PM_EMAILPM'	=> 'Može da šalje privatne poruke emailom',
	'ACL_U_PM_PRINTPM'	=> 'Može da štampa privatne poruke',
	'ACL_U_PM_ATTACH'	=> 'Može da prikači fajlove u privatnim porukama',
	'ACL_U_PM_DOWNLOAD'	=> 'Može da preuzima fajlove u privatnim porukama',
	'ACL_U_PM_BBCODE'	=> 'Može da upotrebi BBKod u privatnim porukama',
	'ACL_U_PM_SMILIES'	=> 'Može da koristi smajlije u privatnim porukama',
	'ACL_U_PM_IMG'		=> 'Može da ubacuje slike u privatne poruke',
	'ACL_U_PM_FLASH'	=> 'Može da ubacuje Flash fajlove u privatnim porukama',

	'ACL_U_SENDEMAIL'	=> 'Može da šalje email',
	'ACL_U_SENDIM'		=> 'Može da šalje isntant poruke',
	'ACL_U_IGNOREFLOOD'	=> 'Može da ignoriše limit flodovanja',
	'ACL_U_HIDEONLINE'	=> 'Može da sakrije OnLine status',
	'ACL_U_VIEWONLINE'	=> 'Može da vidi sve koji su OnLine',
	'ACL_U_SEARCH'		=> 'Može da pretražuje board',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Može da vidi forum',
	'ACL_F_READ'		=> 'Može da čita forum',
	'ACL_F_POST'		=> 'Može da šalje postove u forum',
	'ACL_F_ANNOUNCE'	=> 'Može da šalje obaveštenja',
	'ACL_F_STICKY'		=> 'Može da šalje lepljive poruke',
	'ACL_F_REPLY'		=> 'Može da odgovara na postove',
	'ACL_F_ICONS'		=> 'Može da koristi konice za postove',

	'ACL_F_POLL'		=> 'Može da pravi glasanja',
	'ACL_F_VOTE'		=> 'Može da glasa',
	'ACL_F_VOTECHG'		=> 'Može da izmeni postojeće glasanje',

	'ACL_F_ATTACH'		=> 'Može da prikači fajlove',
	'ACL_F_DOWNLOAD'	=> 'Može da preuzima fajlove',
	'ACL_F_SIGS'		=> 'Može da koristi potpise',
	'ACL_F_BBCODE'		=> 'Može da šalje BBKOd',
	'ACL_F_SMILIES'		=> 'Može da koristi smajlije',
	'ACL_F_IMG'			=> 'Može da šalje slike',
	'ACL_F_FLASH'		=> 'Može da šalje Flash fajlove',

	'ACL_F_EDIT'		=> 'Može da menja sopstvene postove',
	'ACL_F_DELETE'		=> 'Može da briše sopstvene postove',
	'ACL_F_USER_LOCK'	=> 'Može da zaključa sopstvene teme',
	'ACL_F_BUMP'		=> 'Može da sklanja teme',
	'ACL_F_REPORT'		=> 'Može da prijavi postove',
	'ACL_F_SUBSCRIBE'	=> 'Može da prati forum',
	'ACL_F_PRINT'		=> 'Može da štampa teme',
	'ACL_F_EMAIL'		=> 'Može da šalje teme na email',

	'ACL_F_SEARCH'		=> 'Može da pretražuje forum',
	'ACL_F_SOFTDELETE'	=> 'Može da blago obriše svoje postove<br /><em>Moderatori, koji imaju dozvolu za odobravanje postova mogu da povrate blago obrisane postove.</em>',
	'ACL_F_IGNOREFLOOD' => 'Može da ignoriše ograničenje flodovanja',
	'ACL_F_POSTCOUNT'	=> 'Poveća brojač posta',
	'ACL_F_NOAPPROVE'	=> 'Može da postuje bez dozvole',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Može da menja postove',
	'ACL_M_DELETE'		=> 'Može da briše postove',
	'ACL_M_SOFTDELETE'	=> 'Može blago da postove<br /><em>Moderatori, koji imaju dozvolu za odobravanje postova mogu da povrate blago obrisane postove.</em>',
	'ACL_M_APPROVE'		=> 'Može da odobrava postove',
	'ACL_M_REPORT'		=> 'Može da zatvori i briše izveštaje',
	'ACL_M_CHGPOSTER'	=> 'Može da promeni autora posta',

	'ACL_M_MOVE'	=> 'Može da pomeri teme',
	'ACL_M_LOCK'	=> 'Može da zaključa teme',
	'ACL_M_SPLIT'	=> 'Može da podeli teme',
	'ACL_M_MERGE'	=> 'Može da spoji teme',

	'ACL_M_INFO'	=> 'Može videti detalje posta',
	'ACL_M_WARN'	=> 'Može davati upozorenja<br /><em>Ovo podešavanje je samo globalno dodeljeno. Nije bazirano po forumima.</em>',
	'ACL_M_PM_REPORT'	=> 'Može da zatvara i briše prijave privatnih poruka<br /><em>Ovo podešavanje je samo globalno dodeljeno. Nije bazirano po forumima.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'		=> 'Može da upravlja zabranamabr /><em>Ovo podešavanje je samo globalno dodeljeno. Ono nije bazirano po forumima.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Može da menja podešavanja boarda',
	'ACL_A_SERVER'		=> 'Može da menja podešavanja servera/komunikacije',
	'ACL_A_JABBER'		=> 'Može da menja podešavanja Jabber-a',
	'ACL_A_PHPINFO'		=> 'Može da pogleda podešavanja php-a',

	'ACL_A_FORUM'		=> 'Može da podešava forume',
	'ACL_A_FORUMADD'	=> 'Može da doda nove forume',
	'ACL_A_FORUMDEL'	=> 'Može da briše forume',
	'ACL_A_PRUNE'		=> 'Može da sažima forume',

	'ACL_A_ICONS'		=> 'Može da promeni ikonice i smajlije tema',
	'ACL_A_WORDS'		=> 'Može da izmeni cenzurisane reči',
	'ACL_A_BBCODE'		=> 'Može da definiše BBKod tagove',
	'ACL_A_ATTACH'		=> 'Može da izmeni podešavanja vezana za prikačene fajlove',

	'ACL_A_USER'		=> 'Može da upravlja korisnicima',
	'ACL_A_USERDEL'		=> 'Može da briše/sažima korisnike',
	'ACL_A_GROUP'		=> 'Može da upravlja grupama',
	'ACL_A_GROUPADD'	=> 'Može da dodaje nove grupe',
	'ACL_A_GROUPDEL'	=> 'Može da briše grupe',
	'ACL_A_RANKS'		=> 'Može da upravlja činovima',
	'ACL_A_PROFILE'		=> 'Može da upravlja proizvoljnim poljima profila',
	'ACL_A_NAMES'		=> 'Može da upravlja zabranjenim imenima',
	'ACL_A_BAN'			=> 'Može da upravlja zabranama',

	'ACL_A_VIEWAUTH'	=> 'Može da vidi maske dozvola',
	'ACL_A_FAUTH'		=> 'Može da izmeni dozvole foruma',
	'ACL_A_MAUTH'		=> 'Može da izmeni dozvole moderatora',
	'ACL_A_AAUTH'		=> 'Može da izmeni dozvole administratora',
	'ACL_A_UAUTH'		=> 'Može da izmeni dozvole korisnika',
	'ACL_A_AUTHGROUPS'	=> 'Može da izmeni dozvole za grupe',
	'ACL_A_AUTHUSERS'	=> 'Može da izmeni dozvole za korisnike',
	'ACL_A_ROLES'		=> 'Može da upravlja pravilima',
	'ACL_A_SWITCHPERM'	=> 'Može da koristi druge dozvole',

	'ACL_A_STYLES'		=> 'Može da upravlja stilovima',
	'ACL_A_EXTENSIONS'	=> 'Može da upravlja ekstenzijama',
	'ACL_A_VIEWLOGS'	=> 'Može da vidi logove',
	'ACL_A_CLEARLOGS'	=> 'Može da briše logove',
	'ACL_A_MODULES'		=> 'Može da upravlja modulima',
	'ACL_A_LANGUAGE'	=> 'Može da upravlja jezičkim paketima',
	'ACL_A_EMAIL'		=> 'Može da šalje masovni email',
	'ACL_A_BOTS'		=> 'Može da upravlja botovima',
	'ACL_A_REASONS'		=> 'Može da upravlja razlozima izveštaja/odbijanja',
	'ACL_A_BACKUP'		=> 'Može da sačuva/povrati bazu',
	'ACL_A_SEARCH'		=> 'Može da upravlja pozadinskom pretragom i podešavanjima',
));
