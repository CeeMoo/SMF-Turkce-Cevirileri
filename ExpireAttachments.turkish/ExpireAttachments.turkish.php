<?php

/**
 *
 * @package Expire Attachments mod
 * @version 1.0
 * @author Jessica González <suki@missallsunday.com>
 * @copyright Copyright (c) 2013, Jessica González
 * @license http://www.mozilla.org/MPL/MPL-1.1.html
 */

global $txt;

$txt['ExAt_modName'] = 'Ekler Bitiþ Tarihi';

// UI
$txt['ExAt_ui_selectDate'] = 'Seçin son kullanma tarihi';
$txt['ExAt_ui_title'] = ' Son kullanma tarihi: ';
$txt['ExAt_ui_showDate'] = 'Bu eklenti sona erecek ';
$txt['EXAT_ui_legend'] = '[Eklenti süresi]';
$txt['EXAT_ui_legend_custom'] = '[%s süresi]';

// Admin
$txt['ExAt_setting_pageTitle'] = 'Eklerin son kullanma tarihi';
$txt['ExAt_setting_pageDesc'] = 'Bu sayfadan eklentiler için son kullanma tarihini deðiþtirebilirsiniz..<br />Son kullanma tarihlerini deðiþtirkene dikkatli olun sadece mod kurulduktan sonraki eklentiler içindir<br />Bu mod eski eklentileri kapsamaz yeni eklentiler ile birlikte çalýþacaktýr<br />En az bir tarih girilmelidir yoksa herhangi bir son kullanma tarihi olmuyacaktýr üye grublarýna göre izinler ayarlanabilir';
$txt['ExAt_setting_periodsDay_number'] = 'Gün dönemi için dönem sayýsýný.';
$txt['ExAt_setting_periodsWeek_number'] = 'Hafta dönemi için dönem sayýsýný.';
$txt['ExAt_setting_periodsMonth_number'] = 'Ay dönemi için dönem sayýsýný.';
$txt['ExAt_setting_periodsYear_number'] = 'Yýl dönemi için dönem sayýsýný.';
$txt['ExAt_setting_enable'] = 'Modu Aktif Et';
$txt['ExAt_setting_enable_sub'] = 'Bu ayar modun düzgün çalýþmasý için olmalýdýr';
$txt['ExAt_setting_second'] = 'saniye';
$txt['ExAt_setting_minute'] = 'dakika';
$txt['ExAt_setting_hour'] = 'saat';
$txt['ExAt_setting_day'] = 'gün';
$txt['ExAt_setting_week'] = 'hafta';
$txt['ExAt_setting_month'] = 'ay';
$txt['ExAt_setting_year'] = 'yýl';
$txt['ExAt_setting_now'] = 'þimdi';
$txt['ExAt_setting_forever'] = 'Zaman aþýmýna uðramayacak';
$txt['ExAt_setting_forever_js'] = 'Doesn\\\'t expire';
$txt['ExAt_setting_s'] = ' sonra';
$txt['ExAt_setting_enableDay_period'] = 'Gün dönemini etkinleþtirme';
$txt['ExAt_setting_enableWeek_period']  = 'Hafta dönemini etkinleþtirme';
$txt['ExAt_setting_enableMonth_period']  = 'Ay dönemini etkinleþtirme';
$txt['ExAt_setting_enableYear_period']  = 'Yýl dönemini etkinleþtirme';
$txt['ExAt_setting_enableForever_period']  = 'Eklenti Zaman aþýmýna uðramýyacak';
$txt['ExAt_setting_enableForever_period_sub'] = 'Bu ayar kullanýcýlarýn eklentilere son kullanma tarihi belirtmeden geçme izini verecektir'; 
$txt['ExAt_setting_availablePermissions'] = 'Mevcut geçerli izinler:';

// Permissions
$txt['permissionname_ExAt_Day'] = 'Gün dönemini izin';
$txt['permissionname_ExAt_Week'] = 'Hafta dönemini izin';
$txt['permissionname_ExAt_Month'] = 'Ay dönemini izin';
$txt['permissionname_ExAt_Year'] = 'Yýl dönemini izin';
$txt['permissionname_ExAt_Forever'] = 'Onlarýn ekleri zaman aþýmýna uðramayacak';
