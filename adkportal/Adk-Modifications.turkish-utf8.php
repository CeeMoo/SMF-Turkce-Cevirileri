<?php
/**
 * Adk Portal
 * Version: 3.0
 * Official support: http://www.smfpersonal.net
 * Author: Adk Team
 * Copyright: 2009 - 2014 © SMFPersonal
 * Developers:
 * 		Juarez, Lucas Javier
 * 		Clavijo, Pablo
 *
 * version smf 2.0*
 *tükçe çeviri: http://smf.konusal.com/
 */

	global $scripturl;

/* Set the admin sections*/     /* Main */
$txt['adkmod_adkportal'] = 'Adk Portal';
$txt['adkmod_news'] = 'Haberler';
$txt['adkmod_settings'] = 'Ayarlar';
$txt['adkmod_icons'] = 'Simgeler';
$txt['adkmod_stand'] = 'Bağımsız Ayarları';
$txt['adkmod_smf_personal'] = 'Adk Portal yardım';

//Admin Blocklar
$txt['adkmod_block_templates'] = 'Şablonlar';
$txt['adkmod_block_manage'] = 'Blokları yönetin';
$txt['adkmod_block_title'] = 'Bloklar';
$txt['adkmod_block_settings'] = 'Blokları yapılandır';
$txt['adkmod_block_add'] = 'Blok ekle';
$txt['adkmod_block_add_news'] = 'Yeni Ekle';
$txt['adkmod_block_upload'] = 'Yükleme Blok';
$txt['adkmod_block_download'] = 'İndirme Blok';

//Admin Modules
$txt['adkmod_modules_manage'] = 'Modulleri yönetin';
$txt['adkmod_modules_intro'] = 'indeks';
$txt['adkmod_modules_pages'] = 'Sayfalar';
$txt['adkmod_modules_contacto'] = 'Bize Ulaşın';
$txt['adkmod_modules_images'] = 'Gelişmiş görüntü';
$txt['adkmod_modules_manage_images'] = 'Resimleri Yönetin';

//Admin Downloads
$txt['adkmod_eds_manage'] = 'Downloadları Yönetin';
$txt['adkmod_eds_settings'] = 'Seçenekler';
$txt['adkmod_eds_add'] = 'Kategori Ekle';
$txt['adkmod_eds_categories'] = 'Kategoriler';
$txt['adkmod_eds_approve'] = 'Downloadları Onayla';

//Admin Seo
$txt['adkmod_seo_manage'] = 'Seo Yöneitimi';
$txt['adkmod_seo_htaccess'] = 'Htaccess Oluştur';
$txt['adkmod_seo_robots'] = 'Robots.txt Oluştur';

//Permissions
$txt['permissiongroup_adkportal'] = 'Adk Portal';
$txt['permissiongroup_simple_adkportal'] = 'Adk Portal';
$txt['permissionname_adk_portal'] = 'Adkportal Yönetin';
$txt['permissionhelp_adk_portal'] = 'ADK portal ve modülleri yönetmek için kullanıcıya izin verir';
$txt['permissiongroup_adkdownloads'] = 'Downloads sistemi (Adk portal)';
$txt['permissiongroup_simple_adkdownloads'] = 'Download sistemi (Adk Portal)';
$txt['cannot_adk_downloads_add'] = 'Sizin download eklemek için izniniz yok.';
$txt['permissionname_adk_downloads_autoapprove'] = 'Otomatik download onaylamak';
$txt['permissionhelp_adk_downloads_autoapprove'] = 'kullanıcının downloadları bir yönetici tarafından görülmesi gerekmez..';
$txt['permissionname_adk_downloads_manage'] = 'Download sisteminin yönetimi';
$txt['permissionhelp_adk_downloads_manage'] = 'Download sistemi yönetmek için izin verir.';
$txt['cannot_adk_downloads_manage'] = 'Download merkezine ulaşmak izniniz yok.';
$txt['cannot_adk_portal'] = 'Adk Portal Yönetmek için izniniz yok.';;

//Set the portal txt :P
$txt['adkmod_portal'] = 'Portal';

//Set some strings
$txt['adkmod_expand'] = 'Sütunu Genişlet';
$txt['adkmod_collapse'] = 'Sütunu Daralt';
$txt['adk_disable_notifications_profile'] = 'Sayfalar modülünde bildirimleri devre dışı bırak ';

//Buttons
$txt['adkmod_downloads'] = 'Download';
$txt['adkmod_forum'] = 'Forum';
$txt['adkmod_pages'] = 'Sayfalar';
$txt['adkmod_pages_unread'] = 'Okunmamış Yorumlar';

//Javascript Blocklar
$txt['adkmod_shoutbox_sending'] = 'Gönder';
$txt['adkmod_shoutbox_all_field'] = 'Lütfen tüm alanları doldurun';
$txt['adkmod_shoutbox_shout_it'] = 'Gönder!!';

//Blocklar
$txt['adkmod_block_no_post_see'] = 'Görebileceğiniz Mesaj yok';
$txt['adkmod_block_no_read'] = 'Okunmamış mesajlar';
$txt['adkmod_block_alls'] = 'Tüm';
$txt['adkmod_block_last'] = 'Son ziyaret';
$txt['adkmod_block_new_replies'] = 'Sadece Cevaplar';
$txt['adkmod_block_hi'] = 'Merhaba';
$txt['adkmod_block_guest'] = 'Ziyaretçi';
$txt['adkmod_block_none_images'] = 'Henüz resim yok';
$txt['adkmod_block_who_title'] = 'Kimler çevrimiçi?';
$txt['adkmod_block_remove_message'] = 'Bundan emin misin? Bu işlem geri alınamaz.';
$txt['adkmod_block_borrar'] = 'Sil';
$txt['adkmod_block_editar'] = 'Düzenle';
$txt['adkmod_block_added_portal'] = 'Portala eklendi';
$txt['adkmod_block_posts'] = 'Mesaj';
$txt['adkmod_block_last_updated'] = 'Son Güncelleme';
$txt['adkmod_block_shout_now_allowed'] = 'shoutbox görüntülemek için izniniz yok.';
$txt['adkmod_block_add_this_topic'] = 'Portala ekle';
$txt['adkmod_block_remove_this_topic'] = 'Portaldan Sil';
$txt['adkmod_block_open_smileys'] = 'Smileys Aç';
$txt['adkmod_block_karma'] = 'Karma';
$txt['adkmod_block_reminder'] = 'Add a reminder for not forget that he wished to :)';
$txt['adkmod_block_readmore'] = 'Daha Fazlası';
$txt['adkmod_block_notext'] = '<div style="text-align: center; margin-bottom: 5px;">Sohbet Kutusunda ileti yok<br />İlk iletiyi siz gönderin!</div>';
$txt['adkmod_block_nopost'] = '<div style="text-align: center;"><strong>Sohbet Kutusunda ileti yok</strong>
<br /><br /><strong>[</strong> <a href="'.$scripturl.'/">indeks git</a> <strong>]</strong> 
</div>';
$txt['activate_ssi'] = 'Lütfen yönetici bölümünden SSI ekleyiniz';

//Who's integration
$txt['who_adk_portal'] = 'Portal sitesi görüntüleniyor.';
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

$txt['adkmod_Adkportaldonate'] = '<div style="text-align:center;" class="smalltext"><a href="http://www.smfpersonal.net/index.php?action=about;sa=contribute" target="blank">projeye katkıda bulun</a><br/>Türkçe çeviri:<a href="http://smf.konusal.com/" target="blank">smf destek</a></div>';

//Fatal errors
$txt['adkfatal_wrong_icon_id'] = 'simgesi bulunmamaktadır silmeye çalıştığınızın.';
$txt['adkfatal_not_select_image_icon'] = 'Yüklemeye çalıştığınız resim geçersiz.';
$txt['adkfatal_page_not_exist'] = 'Görüntülemeye çalıştığınız sayfa mevcut değil';
$txt['adkfatal_shout_now_allowed'] = 'Bu modülü görüntülemek için izniniz yok.';
$txt['adkfatal_adding_news_false'] = 'Eklemeye çalıştığınız konu mevcut değil .';
$txt['adkfatal_form_error'] = 'Formunda bir hata oluştu. Lütfen tüm alanları doldurun.';
$txt['adkfatal_empty_title'] = 'Bir hata oluştu. başlık alanı gerekiyor.';
$txt['adkfatal_empty_body'] = 'Bir hata oluştu. Mesaj gövdesi gereklidir.';
$txt['adkfatal_adk_not_page_id'] = 'Görüntülemeye çalıştığınız sayfa mevcut değil.';
$txt['adkfatal_require_url'] = 'Lütfen URL ekleyin';
$txt['adkfatal_require_image'] = 'Bir resim veya url eklemeniz gerekicek.';
$txt['adkfatal_this_module_doesnt_exist'] = 'Bu modül kapalı.';
$txt['adkfatal_require_catid'] = 'Mevcut olmayan kategoriye bakamazsınız.';
$txt['adkfatal_empty_id_profile'] = 'Mevcut olmayan profile bakamazsınız.';
$txt['adkfatal_user_not_have_nadanose'] = 'Malesef bu kullanıcıya dosya indirme izni yok.';
$txt['adkfatal_please_select_cat'] = 'Sanırsam yanlış yerden dosya eklemeye çalışıyorsunuz.';
$txt['adkfatal_this_category_not_exist'] = 'Böyle bir kategori bulunmuyor.';
$txt['adkfatal_not_writable_dir'] = 'Sen ne yapıyor.Bu izinler için yöneticiye ulaş.';
$txt['adkfatal_please_add_a_title'] = 'Dosyana başlık eklemelisin.';
$txt['adkfatal_please_add_a_body'] = 'Bilgi alanını doldur.';
$txt['adkfatal_empty_attach'] = 'Dosya eklerseniz indirirsiniz.';
$txt['adkfatal_require_id_file'] = 'Varolmayan dosyayı editliyemezsiniz.';
$txt['adkfatal_not_permission'] = 'Bu eylemi gerçekleştirmek için izniniz yok.';
$txt['adkfatal_big_size'] = 'Eklemeye çalıştığınız dosya boyut olarak kurtarmıyor.';
$txt['adkfatal_this_download_not_exist'] = 'Böyle bir dosya bulunmamaktadır.';
$txt['adkfatal_this_download_not_approved'] = 'Bu dosya onaylanmamış';
$txt['adkfatal_require_url'] = 'Yanlış resim';
$txt['adkfatal_cannot_view'] = 'Bu bölüm için yetkiniz kurtarmıyor';
$txt['adkfatal_cat_title_false'] = 'Yeni kategori isim giriniz.';
$txt['adkfatal_invalid_id_category'] = 'Malesef böyle bir kategori bulunmuyor.';
$txt['adkfatal_weight_height_false'] = 'icon için en yüksek en 128px dir';
$txt['adkfatal_top_karma_error'] = 'Bir hata oluştu.blok içerisinde görüntülemek için kullanıcı sayısını koymak gerek.';
$txt['adkfatal_auto_news_error'] = 'Bir hata oluştu.blok içerisinde görüntülemek için panoları seçmeniz gerekir.';
$txt['adkfatal_please_add_a_body_message'] = 'Bir hata oluştu. ileti gövdesi boş olamaz.';
$txt['adkfatal_insert_multi_id'] = 'Bir hata oluştu. En az bir blok seçmeniz gerekir.';
$txt['adkfatal_empty_block_id'] = 'Bir hata oluştu. siz görüntülemeye çalıştığınız blok bulunmamaktadır.';
$txt['adkfatal_empty_news_id'] = 'Bir hata oluştu.yeni görüntülemeye çalıştığınız mevcut değil.';
$txt['adkfatal_lang_error_not_block'] = 'You are not upload any block.';
$txt['adkfatal_extension'] = 'php olduğuna eminmisin?';
$txt['adkfatal_invalid_type'] = 'Geçersiz işlem';
$txt['adkfatal_empty_place'] = 'Şablon için alan seçmen gerekir.';
$txt['adkfatal_template_invalid_id'] = 'Bir hata oluştu.görüntülemeye çalıştığınız şablon mevcut değil.';
$txt['adkfatal_exists_this_template'] = 'siz oluşturmak için çalışıyoruz şablon zaten var';
$txt['adkfatal_you_can_not_modify_portal_template'] = 'Portal şablonunu kaldırmak veya devre dışı olabilir';
$txt['adkfatal_smf_p_Blocklar_not'] = 'Var olmayan bir blok indirmek için çalışıyorsunuz.';
$txt['adkfatal_enable_blog_please'] = 'Adk blog etkinleştirebilirsiniz';
$txt['adkfatal_captcha_invalid'] = 'Görsel doğrulama başarısız oldu';
$txt['adkfatal_module_not_enable'] = 'Bu modül kapalı.';
$txt['adkfatal_guest_not_add'] = 'Ziyaretçi dosya ekliyemez.';
$txt['adkfatal_not_zero_data'] = 'Veri kaydedilirken bir hata oluştu.<br />Aşağıdaki alanlar boş veya sıfır olamaz (0)<br />
<strong>Sayfa başına Haber miktarı<br />
Başlık sayısı Görüntülenecek<br />
blokta gösterelicek konuların sınırı<br />
Kullanıcı Sınırı En çok Yazanlar</strong>';

// eds
$txt['adkeds_nocategory'] = 'Böyle bir kategori oluşturulmadı.';

?>