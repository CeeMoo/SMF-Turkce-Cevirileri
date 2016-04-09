<?php

/**
 *
 * @package Expire Attachments mod
 * @version 1.0
 * @author Jessica Gonz�lez <suki@missallsunday.com>
 * @copyright Copyright (c) 2013, Jessica Gonz�lez
 * @license http://www.mozilla.org/MPL/MPL-1.1.html
 */

global $txt;

$txt['ExAt_modName'] = 'Ekler Biti� Tarihi';

// UI
$txt['ExAt_ui_selectDate'] = 'Se�in son kullanma tarihi';
$txt['ExAt_ui_title'] = ' Son kullanma tarihi: ';
$txt['ExAt_ui_showDate'] = 'Bu eklenti sona erecek ';
$txt['EXAT_ui_legend'] = '[Eklenti s�resi]';
$txt['EXAT_ui_legend_custom'] = '[%s s�resi]';

// Admin
$txt['ExAt_setting_pageTitle'] = 'Eklerin son kullanma tarihi';
$txt['ExAt_setting_pageDesc'] = 'Bu sayfadan eklentiler i�in son kullanma tarihini de�i�tirebilirsiniz..<br />Son kullanma tarihlerini de�i�tirkene dikkatli olun sadece mod kurulduktan sonraki eklentiler i�indir<br />Bu mod eski eklentileri kapsamaz yeni eklentiler ile birlikte �al��acakt�r<br />En az bir tarih girilmelidir yoksa herhangi bir son kullanma tarihi olmuyacakt�r �ye grublar�na g�re izinler ayarlanabilir';
$txt['ExAt_setting_periodsDay_number'] = 'G�n d�nemi i�in d�nem say�s�n�.';
$txt['ExAt_setting_periodsWeek_number'] = 'Hafta d�nemi i�in d�nem say�s�n�.';
$txt['ExAt_setting_periodsMonth_number'] = 'Ay d�nemi i�in d�nem say�s�n�.';
$txt['ExAt_setting_periodsYear_number'] = 'Y�l d�nemi i�in d�nem say�s�n�.';
$txt['ExAt_setting_enable'] = 'Modu Aktif Et';
$txt['ExAt_setting_enable_sub'] = 'Bu ayar modun d�zg�n �al��mas� i�in olmal�d�r';
$txt['ExAt_setting_second'] = 'saniye';
$txt['ExAt_setting_minute'] = 'dakika';
$txt['ExAt_setting_hour'] = 'saat';
$txt['ExAt_setting_day'] = 'g�n';
$txt['ExAt_setting_week'] = 'hafta';
$txt['ExAt_setting_month'] = 'ay';
$txt['ExAt_setting_year'] = 'y�l';
$txt['ExAt_setting_now'] = '�imdi';
$txt['ExAt_setting_forever'] = 'Zaman a��m�na u�ramayacak';
$txt['ExAt_setting_forever_js'] = 'Doesn\\\'t expire';
$txt['ExAt_setting_s'] = ' sonra';
$txt['ExAt_setting_enableDay_period'] = 'G�n d�nemini etkinle�tirme';
$txt['ExAt_setting_enableWeek_period']  = 'Hafta d�nemini etkinle�tirme';
$txt['ExAt_setting_enableMonth_period']  = 'Ay d�nemini etkinle�tirme';
$txt['ExAt_setting_enableYear_period']  = 'Y�l d�nemini etkinle�tirme';
$txt['ExAt_setting_enableForever_period']  = 'Eklenti Zaman a��m�na u�ram�yacak';
$txt['ExAt_setting_enableForever_period_sub'] = 'Bu ayar kullan�c�lar�n eklentilere son kullanma tarihi belirtmeden ge�me izini verecektir'; 
$txt['ExAt_setting_availablePermissions'] = 'Mevcut ge�erli izinler:';

// Permissions
$txt['permissionname_ExAt_Day'] = 'G�n d�nemini izin';
$txt['permissionname_ExAt_Week'] = 'Hafta d�nemini izin';
$txt['permissionname_ExAt_Month'] = 'Ay d�nemini izin';
$txt['permissionname_ExAt_Year'] = 'Y�l d�nemini izin';
$txt['permissionname_ExAt_Forever'] = 'Onlar�n ekleri zaman a��m�na u�ramayacak';
