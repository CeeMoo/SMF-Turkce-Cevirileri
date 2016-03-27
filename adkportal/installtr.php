<?php
/**
 * Adk Portal
 * Version: 3.1
 * Official support: http://www.smfpersonal.net
 * Author: Adk Team
 * Copyright: 2009 - 2016 © SMFPersonal
 * Developers:
 * 		Juarez, Lucas Javier
 * 		Clavijo, Pablo
 *
 */

$direct_install = false;

if(file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF')){
	require_once(dirname(__FILE__) . '/SSI.php');
	$direct_install = true;
}
elseif (!defined('SMF'))
	die('Adk portal wasn\'t able to conect to smf');


//Anothers $smcFunc;
db_extend('packages');

global $smcFunc;
	
//Finally Create Column
foreach($columns AS $add)
	$smcFunc['db_add_column']($add['table_name'], $add['column_info'], $add['parameters'], $add['if_exists'],$add['error']);

global $language;

//Possible languages.... yeah we're a site in turkish :)
$turkish = array('turkish','turkish-utf8');

if(in_array($language,$turkish)){
	$MainMenu = 'Ana Menü';
	$PersonalMenu = 'Kişisel Menü';
	$Usersonline = 'Kimler Çevrimiçi';
	$TopPosters = 'En Çok Yazanlar';
	$LastTopics = 'Son Konular';
	$News = 'Haberler';
	$AutoNews = 'Otomatik Haberler';
	$Stats = 'İstatistik';
	$RandomImage = 'Rasgele Resimler';
	$Shoutbox = 'Sohbet Kutusu';
	$Reminders = 'Hatırlatmalar';
	$Calendar = 'Takvim';
	$NewsandNewsLetter = 'Haberler ve Bültenler';

	$title = 'Adk Portal Türkçe Dil paketi kuruldu';
	$text = $smcFunc['htmlspecialchars']
	('
[center][size=18pt][font=tahoma][b][color=#0489B1]Adk Portal Türkçe Dil paketi[/color][/b][/font][/size] [/center]
[hr]
[color=green]Türkçe Çeviri[/color]: [url=http://smf.konusal.com/]Smf.konusal.com[/url]
[hr]
[center][size=18pt][b]Bu Dil Paketi Bir smf.konusal.com hizmetidir[/b][/size][/center]
[center][size=14pt][color=green][b][url=http://smf.konusal.com/]Smf destek[/url][/b][/color][/size]


[img]http://smf.konusal.com/Themes/pisi/images/theme/logo.png[/img][/center]'
	);
}

//Add new blocks
$adk_blocks = array(
	'main_menu' => array(
		$MainMenu,
		'menuprincipal.php',
		'page.png',
		'include',
	),
	'personal_menu' => array(
		$PersonalMenu,
		'menupersonal.php',
		'heart.png',
		'include',
	),
	'users_online' => array(
		$Usersonline,
		'whois.php',
		'online.png',
		'include',
	),
	'top_posters' => array(
		$TopPosters,
		'topposter10.php',
		'top.png',
		'include',
	),
	'last_topics' => array(
		$LastTopics,
		'ultimosmensajes.php',
		'rosette.png',
		'include',
	),
	'news_adk' => array(
		$News,
		'newsadk.php',
		'feed.png',
		'include',
	),
	'auto_news' => array(
		$AutoNews,
		'aportes_automaticos.php',
		'plugin.png',
		'include',
	),
	'stats' => array(
		$Stats,
		'estadisticas.php',
		'stats.png',
		'include',
	),
	'random_image' => array(
		$RandomImage,
		'random_image.php',
		'disk.png',
		'include',
	),
	'shoutbox' => array(
		$Shoutbox,
		'adk_shoutbox.php',
		'plugin.png',
		'include',
	),
	'LoadRemembers' => array(
		$Reminders,
		'LoadRemembers.php',
		'disk.png',
		'include',
	),
	'Calendar' => array(
		$Calendar,
		$smcFunc['htmlspecialchars']('<?php ShowMyCalendar(); ?>'),
		'disk.png',
		'php',
	),
	'news_and_news' => array(
		$NewsandNewsLetter,
		$smcFunc['htmlspecialchars']('<?php adk_bienvenidos(); ?>'),
		'feed2.png',
		'php',
	),
);

//Delete phpblocks
$php_blocks = array('newsadk.php', 'menuprincipal.php','menupersonal.php','whois.php','topposter10.php','ultimosmensajes.php','aportes_automaticos.php','estadisticas.php','random_image.php','adk_shoutbox.php','LoadRemembers.php');
$smcFunc['db_query']('','DELETE FROM {db_prefix}adk_blocks WHERE echo IN ({array_string:block_name})', array('block_name' => $php_blocks));

$rest_blocks = array('Calendar','News and NewsLetter');
$smcFunc['db_query']('','DELETE FROM {db_prefix}adk_blocks WHERE name IN ({array_string:block_name}) AND type = {text:php}', array('block_name' => $rest_blocks, 'php' => 'php'));

$adk_columns_blocks = array(
	'name' => 'text',
	'echo' => 'text',
	'img' => 'text',
	'type' => 'text',
);
//Finally insert in adk_blocks
$smcFunc['db_insert'](
	//method
	'ignore', 
	//Table name
	'{db_prefix}adk_blocks', 
	//Columns
	$adk_columns_blocks, 
	//The insert
	$adk_blocks, 
	//Ah?
	array('id')
);

//Delete previos default template
$sql = $smcFunc['db_query']('','SELECT id_template FROM {db_prefix}adk_blocks_template_admin WHERE type = {text:default}', array('default' => 'default'));
if($smcFunc['db_num_rows']($sql) == 0)
	$smcFunc['db_insert']('ignore', '{db_prefix}adk_blocks_template_admin', array('type' => 'text', 'enabled' => 'int'), array('default' => array('default', 1)), array('id_template'));

//Reset Default Template
$smcFunc['db_query']('','DELETE FROM {db_prefix}adk_blocks_template');

$sql = $smcFunc['db_query']('','SELECT id, name FROM {db_prefix}adk_blocks');

$ids = array();
while($row = $smcFunc['db_fetch_assoc']($sql))
	$ids[$row['name']] = $row['id'];

$smcFunc['db_free_result']($sql);

if(!empty($ids)){
	$adk_blocks_template = array(
		'main_menu' => array(1, $ids[$MainMenu], 1, 1),
		'personal_menu' => array(1, $ids[$PersonalMenu], 1,2),
		'top_posters' => array(1, $ids[$TopPosters], 1, 3),
		'last_topics' => array(1, $ids[$LastTopics], 2, 1),
		'news' => array(1, $ids[$News], 2, 2),
		'auto_news' => array(1, $ids[$AutoNews], 2, 3),
		'reminders' => array(1, $ids[$Reminders], 3, 1),
		'stats' => array(1, $ids[$Stats], 3, 2),
		'users_online' => array(1, $ids[$Usersonline], 3, 3),
	);

	$adk_blocks_c = array('id_template' => 'int','id_block' => 'int','columna' => 'int','orden' => 'int',);
	$smcFunc['db_insert']('ignore', '{db_prefix}adk_blocks_template', $adk_blocks_c, $adk_blocks_template, array('id_template'));
}

// -.-
$adk_icon_new = array(
	'disk.png',
	'feed.png',
	'feed2.png',
	'folder.png',
	'heart.png',
	'help2.png',
	'money_dollar.png',
	'online.png',
	'package.png',
	'page.png',
	'plugin.png',
	'rosette.png',
	'sport_raquet.png',
	'sport_soccer.png',
	'sport_tennis.png',
	'stats.png',
	'table_save.png',
	'tag_purple.png',
	'top.png',
	'welcome.png',
);

//DELETE PREVIOUS ICONS
$smcFunc['db_query']('','DELETE FROM {db_prefix}adk_icons WHERE icon IN ({array_string:icons})',array('icons' => $adk_icon_new));

$adk_icons = array();
foreach($adk_icon_new AS $icon) 
	$adk_icons[] = array($icon);

//Insert into adk_icons
$smcFunc['db_insert'](
	//method
	'ignore', 
	//Table name
	'{db_prefix}adk_icons', 
	//Columns
	array('icon' => 'text'), 
	//The insert
	$adk_icons, 
	//Ah?
	array('id')
);


//Add a new news :P
$the_array_info = array(
	'titlepage' => 'text',
	'new' => 'text',
	'autor' => 'text',
	'time' => 'int',
);
$the_array_insert = array(
	$title,
	$text,
	'Adk Team',
	time(),
);

$smcFunc['db_insert']('insert',
	'{db_prefix}adk_news',
	//Load The Array Info
	$the_array_info,
	//Insert Now;)
	$the_array_insert,
	array('id')
);

if($direct_install)
	echo'Done... Adk portal was installed correctly. Enjoy it!';

?>