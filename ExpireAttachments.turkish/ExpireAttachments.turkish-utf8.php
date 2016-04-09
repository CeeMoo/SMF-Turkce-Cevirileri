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

$txt['ExAt_modName'] = 'Ekler Bitiş Tarihi';

// UI
$txt['ExAt_ui_selectDate'] = 'Seçin son kullanma tarihi';
$txt['ExAt_ui_title'] = ' Son kullanma tarihi: ';
$txt['ExAt_ui_showDate'] = 'Bu eklenti sona erecek ';
$txt['EXAT_ui_legend'] = '[Eklenti süresi]';
$txt['EXAT_ui_legend_custom'] = '[%s süresi]';

// Admin
$txt['ExAt_setting_pageTitle'] = 'Eklerin son kullanma tarihi';
$txt['ExAt_setting_pageDesc'] = 'Bu sayfadan eklentiler için son kullanma tarihini değiştirebilirsiniz..<br />Son kullanma tarihlerini değiştirkene dikkatli olun sadece mod kurulduktan sonraki eklentiler içindir<br />Bu mod eski eklentileri kapsamaz yeni eklentiler ile birlikte çalışacaktır<br />En az bir tarih girilmelidir yoksa herhangi bir son kullanma tarihi olmuyacaktır üye grublarına göre izinler ayarlanabilir';
$txt['ExAt_setting_periodsDay_number'] = 'Gün dönemi için dönem sayısını.';
$txt['ExAt_setting_periodsWeek_number'] = 'Hafta dönemi için dönem sayısını.';
$txt['ExAt_setting_periodsMonth_number'] = 'Ay dönemi için dönem sayısını.';
$txt['ExAt_setting_periodsYear_number'] = 'Yıl dönemi için dönem sayısını.';
$txt['ExAt_setting_enable'] = 'Modu Aktif Et';
$txt['ExAt_setting_enable_sub'] = 'Bu ayar modun düzgün çalışması için olmalıdır';
$txt['ExAt_setting_second'] = 'saniye';
$txt['ExAt_setting_minute'] = 'dakika';
$txt['ExAt_setting_hour'] = 'saat';
$txt['ExAt_setting_day'] = 'gün';
$txt['ExAt_setting_week'] = 'hafta';
$txt['ExAt_setting_month'] = 'ay';
$txt['ExAt_setting_year'] = 'yıl';
$txt['ExAt_setting_now'] = 'şimdi';
$txt['ExAt_setting_forever'] = 'Zaman aşımına uğramayacak';
$txt['ExAt_setting_forever_js'] = 'Doesn\\\'t expire';
$txt['ExAt_setting_s'] = ' sonra';
$txt['ExAt_setting_enableDay_period'] = 'Gün dönemini etkinleştirme';
$txt['ExAt_setting_enableWeek_period']  = 'Hafta dönemini etkinleştirme';
$txt['ExAt_setting_enableMonth_period']  = 'Ay dönemini etkinleştirme';
$txt['ExAt_setting_enableYear_period']  = 'Yıl dönemini etkinleştirme';
$txt['ExAt_setting_enableForever_period']  = 'Eklenti Zaman aşımına uğramıyacak';
$txt['ExAt_setting_enableForever_period_sub'] = 'Bu ayar kullanıcıların eklentilere son kullanma tarihi belirtmeden geçme izini verecektir'; 
$txt['ExAt_setting_availablePermissions'] = 'Mevcut geçerli izinler:';

// Permissions
$txt['permissionname_ExAt_Day'] = 'Gün dönemini izin';
$txt['permissionname_ExAt_Week'] = 'Hafta dönemini izin';
$txt['permissionname_ExAt_Month'] = 'Ay dönemini izin';
$txt['permissionname_ExAt_Year'] = 'Yıl dönemini izin';
$txt['permissionname_ExAt_Forever'] = 'Onların ekleri zaman aşımına uğramayacak';
