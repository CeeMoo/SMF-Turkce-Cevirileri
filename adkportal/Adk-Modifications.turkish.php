<?php
/**
 * Adk Portal
 * Version: 3.0
 * Official support: http://www.smfpersonal.net
 * Author: Adk Team
 * Copyright: 2009 - 2014 � SMFPersonal
 * Developers:
 * 		Juarez, Lucas Javier
 * 		Clavijo, Pablo
 *
 * version smf 2.0*
 *t�k�e �eviri: http://smf.konusal.com/
 */

	global $scripturl;

/* Set the admin sections*/     /* Main */
$txt['adkmod_adkportal'] = 'Adk Portal';
$txt['adkmod_news'] = 'Haberler';
$txt['adkmod_settings'] = 'Ayarlar';
$txt['adkmod_icons'] = 'Simgeler';
$txt['adkmod_stand'] = 'Ba��ms�z Ayarlar�';
$txt['adkmod_smf_personal'] = 'Adk Portal yard�m';

//Admin Blocklar
$txt['adkmod_block_templates'] = '�ablonlar';
$txt['adkmod_block_manage'] = 'Bloklar� y�netin';
$txt['adkmod_block_title'] = 'Bloklar';
$txt['adkmod_block_settings'] = 'Bloklar� yap�land�r';
$txt['adkmod_block_add'] = 'Blok ekle';
$txt['adkmod_block_add_news'] = 'Yeni Ekle';
$txt['adkmod_block_upload'] = 'Y�kleme Blok';
$txt['adkmod_block_download'] = '�ndirme Blok';

//Admin Modules
$txt['adkmod_modules_manage'] = 'Modulleri y�netin';
$txt['adkmod_modules_intro'] = 'indeks';
$txt['adkmod_modules_pages'] = 'Sayfalar';
$txt['adkmod_modules_contacto'] = 'Bize Ula��n';
$txt['adkmod_modules_images'] = 'Geli�mi� g�r�nt�';
$txt['adkmod_modules_manage_images'] = 'Resimleri Y�netin';

//Admin Downloads
$txt['adkmod_eds_manage'] = 'Downloadlar� Y�netin';
$txt['adkmod_eds_settings'] = 'Se�enekler';
$txt['adkmod_eds_add'] = 'Kategori Ekle';
$txt['adkmod_eds_categories'] = 'Kategoriler';
$txt['adkmod_eds_approve'] = 'Downloadlar� Onayla';

//Admin Seo
$txt['adkmod_seo_manage'] = 'Seo Y�neitimi';
$txt['adkmod_seo_htaccess'] = 'Htaccess Olu�tur';
$txt['adkmod_seo_robots'] = 'Robots.txt Olu�tur';

//Permissions
$txt['permissiongroup_adkportal'] = 'Adk Portal';
$txt['permissiongroup_simple_adkportal'] = 'Adk Portal';
$txt['permissionname_adk_portal'] = 'Adkportal Y�netin';
$txt['permissionhelp_adk_portal'] = 'ADK portal ve mod�lleri y�netmek i�in kullan�c�ya izin verir';
$txt['permissiongroup_adkdownloads'] = 'Downloads sistemi (Adk portal)';
$txt['permissiongroup_simple_adkdownloads'] = 'Download sistemi (Adk Portal)';
$txt['cannot_adk_downloads_add'] = 'Sizin download eklemek i�in izniniz yok.';
$txt['permissionname_adk_downloads_autoapprove'] = 'Otomatik download onaylamak';
$txt['permissionhelp_adk_downloads_autoapprove'] = 'kullan�c�n�n downloadlar� bir y�netici taraf�ndan g�r�lmesi gerekmez..';
$txt['permissionname_adk_downloads_manage'] = 'Download sisteminin y�netimi';
$txt['permissionhelp_adk_downloads_manage'] = 'Download sistemi y�netmek i�in izin verir.';
$txt['cannot_adk_downloads_manage'] = 'Download merkezine ula�mak izniniz yok.';
$txt['cannot_adk_portal'] = 'Adk Portal Y�netmek i�in izniniz yok.';;

//Set the portal txt :P
$txt['adkmod_portal'] = 'Portal';

//Set some strings
$txt['adkmod_expand'] = 'S�tunu Geni�let';
$txt['adkmod_collapse'] = 'S�tunu Daralt';
$txt['adk_disable_notifications_profile'] = 'Sayfalar mod�l�nde bildirimleri devre d��� b�rak ';

//Buttons
$txt['adkmod_downloads'] = 'Download';
$txt['adkmod_forum'] = 'Forum';
$txt['adkmod_pages'] = 'Sayfalar';
$txt['adkmod_pages_unread'] = 'Okunmam�� Yorumlar';

//Javascript Blocklar
$txt['adkmod_shoutbox_sending'] = 'G�nder';
$txt['adkmod_shoutbox_all_field'] = 'L�tfen t�m alanlar� doldurun';
$txt['adkmod_shoutbox_shout_it'] = 'G�nder!!';

//Blocklar
$txt['adkmod_block_no_post_see'] = 'G�rebilece�iniz Mesaj yok';
$txt['adkmod_block_no_read'] = 'Okunmam�� mesajlar';
$txt['adkmod_block_alls'] = 'T�m';
$txt['adkmod_block_last'] = 'Son ziyaret';
$txt['adkmod_block_new_replies'] = 'Sadece Cevaplar';
$txt['adkmod_block_hi'] = 'Merhaba';
$txt['adkmod_block_guest'] = 'Ziyaret�i';
$txt['adkmod_block_none_images'] = 'Hen�z resim yok';
$txt['adkmod_block_who_title'] = 'Kimler �evrimi�i?';
$txt['adkmod_block_remove_message'] = 'Bundan emin misin? Bu i�lem geri al�namaz.';
$txt['adkmod_block_borrar'] = 'Sil';
$txt['adkmod_block_editar'] = 'D�zenle';
$txt['adkmod_block_added_portal'] = 'Portala eklendi';
$txt['adkmod_block_posts'] = 'Mesaj';
$txt['adkmod_block_last_updated'] = 'Son G�ncelleme';
$txt['adkmod_block_shout_now_allowed'] = 'shoutbox g�r�nt�lemek i�in izniniz yok.';
$txt['adkmod_block_add_this_topic'] = 'Portala ekle';
$txt['adkmod_block_remove_this_topic'] = 'Portaldan Sil';
$txt['adkmod_block_open_smileys'] = 'Smileys A�';
$txt['adkmod_block_karma'] = 'Karma';
$txt['adkmod_block_reminder'] = 'Add a reminder for not forget that he wished to :)';
$txt['adkmod_block_readmore'] = 'Daha Fazlas�';
$txt['adkmod_block_notext'] = '<div style="text-align: center; margin-bottom: 5px;">Sohbet Kutusunda ileti yok<br />�lk iletiyi siz g�nderin!</div>';
$txt['adkmod_block_nopost'] = '<div style="text-align: center;"><strong>Sohbet Kutusunda ileti yok</strong>
<br /><br /><strong>[</strong> <a href="'.$scripturl.'/">indeks git</a> <strong>]</strong> 
</div>';
$txt['activate_ssi'] = 'L�tfen y�netici b�l�m�nden SSI ekleyiniz';

//Who's integration
$txt['who_adk_portal'] = 'Portal sitesi g�r�nt�leniyor.';
$txt['who_adk_forum'] = 'Viewing the board index.';
$txt['who_adk_credits'] = 'Viewing credits Adk Portal.';
$txt['who_adk_contact'] = 'Viewing the contacts section.';
$txt['who_adk_down_cat'] = 'Viewing a category from the downloads section.';
$txt['who_adk_down'] = 'Viewing a category of the Downloads section';
$txt['who_adk_down_profile'] = 'Viewing downloads profile';
$txt['who_adk_down_stats'] = 'Viewing statistics of downloads';
$txt['who_adk_down_search'] = 'Performing a search on downloads';
$txt['who_adk_down_search2'] = 'Viewing the search results in the downloads';
$txt['who_adk_down_add'] = 'Added a new download';
$txt['who_adk_down_edit'] = 'Editing a new download';
$txt['who_adk_down_system'] = 'Viewing the downloads section';
$txt['who_adk_page'] = 'Viewing a site page';
$txt['who_adk_shoutbox'] = 'Viewing Sohbet Kutusu';
$txt['who_adk_index_pages'] = 'Viewing Page Index';

$txt['adkmod_Adkportaldonate'] = '<div style="text-align:center;" class="smalltext"><a href="http://www.smfpersonal.net/index.php?action=about;sa=contribute" target="blank">projeye katk�da bulun</a><br/>T�rk�e �eviri:<a href="http://smf.konusal.com/" target="blank">smf destek</a></div>';

//Fatal errors
$txt['adkfatal_wrong_icon_id'] = 'simgesi bulunmamaktad�r silmeye �al��t���n�z�n.';
$txt['adkfatal_not_select_image_icon'] = 'Y�klemeye �al��t���n�z resim ge�ersiz.';
$txt['adkfatal_page_not_exist'] = 'G�r�nt�lemeye �al��t���n�z sayfa mevcut de�il';
$txt['adkfatal_shout_now_allowed'] = 'Bu mod�l� g�r�nt�lemek i�in izniniz yok.';
$txt['adkfatal_adding_news_false'] = 'Eklemeye �al��t���n�z konu mevcut de�il .';
$txt['adkfatal_form_error'] = 'Formunda bir hata olu�tu. L�tfen t�m alanlar� doldurun.';
$txt['adkfatal_empty_title'] = 'Bir hata olu�tu. ba�l�k alan� gerekiyor.';
$txt['adkfatal_empty_body'] = 'Bir hata olu�tu. Mesaj g�vdesi gereklidir.';
$txt['adkfatal_adk_not_page_id'] = 'G�r�nt�lemeye �al��t���n�z sayfa mevcut de�il.';
$txt['adkfatal_require_url'] = 'L�tfen URL ekleyin';
$txt['adkfatal_require_image'] = 'Bir resim veya url eklemeniz gerekicek.';
$txt['adkfatal_this_module_doesnt_exist'] = 'Bu mod�l kapal�.';
$txt['adkfatal_require_catid'] = 'Mevcut olmayan kategoriye bakamazs�n�z.';
$txt['adkfatal_empty_id_profile'] = 'Mevcut olmayan profile bakamazs�n�z.';
$txt['adkfatal_user_not_have_nadanose'] = 'Malesef bu kullan�c�ya dosya indirme izni yok.';
$txt['adkfatal_please_select_cat'] = 'San�rsam yanl�� yerden dosya eklemeye �al���yorsunuz.';
$txt['adkfatal_this_category_not_exist'] = 'B�yle bir kategori bulunmuyor.';
$txt['adkfatal_not_writable_dir'] = 'Sen ne yap�yor.Bu izinler i�in y�neticiye ula�.';
$txt['adkfatal_please_add_a_title'] = 'Dosyana ba�l�k eklemelisin.';
$txt['adkfatal_please_add_a_body'] = 'Bilgi alan�n� doldur.';
$txt['adkfatal_empty_attach'] = 'Dosya eklerseniz indirirsiniz.';
$txt['adkfatal_require_id_file'] = 'Varolmayan dosyay� editliyemezsiniz.';
$txt['adkfatal_not_permission'] = 'Bu eylemi ger�ekle�tirmek i�in izniniz yok.';
$txt['adkfatal_big_size'] = 'Eklemeye �al��t���n�z dosya boyut olarak kurtarm�yor.';
$txt['adkfatal_this_download_not_exist'] = 'B�yle bir dosya bulunmamaktad�r.';
$txt['adkfatal_this_download_not_approved'] = 'Bu dosya onaylanmam��';
$txt['adkfatal_require_url'] = 'Yanl�� resim';
$txt['adkfatal_cannot_view'] = 'Bu b�l�m i�in yetkiniz kurtarm�yor';
$txt['adkfatal_cat_title_false'] = 'Yeni kategori isim giriniz.';
$txt['adkfatal_invalid_id_category'] = 'Malesef b�yle bir kategori bulunmuyor.';
$txt['adkfatal_weight_height_false'] = 'icon i�in en y�ksek en 128px dir';
$txt['adkfatal_top_karma_error'] = 'Bir hata olu�tu.blok i�erisinde g�r�nt�lemek i�in kullan�c� say�s�n� koymak gerek.';
$txt['adkfatal_auto_news_error'] = 'Bir hata olu�tu.blok i�erisinde g�r�nt�lemek i�in panolar� se�meniz gerekir.';
$txt['adkfatal_please_add_a_body_message'] = 'Bir hata olu�tu. ileti g�vdesi bo� olamaz.';
$txt['adkfatal_insert_multi_id'] = 'Bir hata olu�tu. En az bir blok se�meniz gerekir.';
$txt['adkfatal_empty_block_id'] = 'Bir hata olu�tu. siz g�r�nt�lemeye �al��t���n�z blok bulunmamaktad�r.';
$txt['adkfatal_empty_news_id'] = 'Bir hata olu�tu.yeni g�r�nt�lemeye �al��t���n�z mevcut de�il.';
$txt['adkfatal_lang_error_not_block'] = 'You are not upload any block.';
$txt['adkfatal_extension'] = 'php oldu�una eminmisin?';
$txt['adkfatal_invalid_type'] = 'Ge�ersiz i�lem';
$txt['adkfatal_empty_place'] = '�ablon i�in alan se�men gerekir.';
$txt['adkfatal_template_invalid_id'] = 'Bir hata olu�tu.g�r�nt�lemeye �al��t���n�z �ablon mevcut de�il.';
$txt['adkfatal_exists_this_template'] = 'siz olu�turmak i�in �al���yoruz �ablon zaten var';
$txt['adkfatal_you_can_not_modify_portal_template'] = 'Portal �ablonunu kald�rmak veya devre d��� olabilir';
$txt['adkfatal_smf_p_Blocklar_not'] = 'Var olmayan bir blok indirmek i�in �al���yorsunuz.';
$txt['adkfatal_enable_blog_please'] = 'Adk blog etkinle�tirebilirsiniz';
$txt['adkfatal_captcha_invalid'] = 'G�rsel do�rulama ba�ar�s�z oldu';
$txt['adkfatal_module_not_enable'] = 'Bu mod�l kapal�.';
$txt['adkfatal_guest_not_add'] = 'Ziyaret�i dosya ekliyemez.';
$txt['adkfatal_not_zero_data'] = 'Veri kaydedilirken bir hata olu�tu.<br />A�a��daki alanlar bo� veya s�f�r olamaz (0)<br />
<strong>Sayfa ba��na Haber miktar�<br />
Ba�l�k say�s� G�r�nt�lenecek<br />
blokta g�sterelicek konular�n s�n�r�<br />
Kullan�c� S�n�r� En �ok Yazanlar</strong>';

// eds
$txt['adkeds_nocategory'] = 'B�yle bir kategori olu�turulmad�.';

?>