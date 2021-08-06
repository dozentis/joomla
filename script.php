<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2021 J!German <https://www.jgerman.de>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerScript;

/**
 * Installation class to perform additional changes during install/uninstall/update
 *
 * @since  4.0.0v1
 */
class Pkg_deDEInstallerScript extends InstallerScript
{
	/**
	 * Extension script constructor.
	 *
	 * @since   4.0.0v1
	 */
	public function __construct()
	{
		// Define the minumum versions to be supported.
		$this->minimumJoomla = '4.0';
		$this->minimumPhp    = '7.2.5';

		$this->deleteFiles = array(
			// Backend
			'/administrator/language/de-DE/de-DE.com_actionlogs.ini',
			'/administrator/language/de-DE/de-DE.com_actionlogs.sys.ini',
			'/administrator/language/de-DE/de-DE.com_admin.ini',
			'/administrator/language/de-DE/de-DE.com_admin.sys.ini',
			'/administrator/language/de-DE/de-DE.com_ajax.ini',
			'/administrator/language/de-DE/de-DE.com_ajax.sys.ini',
			'/administrator/language/de-DE/de-DE.com_associations.ini',
			'/administrator/language/de-DE/de-DE.com_associations.sys.ini',
			'/administrator/language/de-DE/de-DE.com_banners.ini',
			'/administrator/language/de-DE/de-DE.com_banners.sys.ini',
			'/administrator/language/de-DE/de-DE.com_cache.ini',
			'/administrator/language/de-DE/de-DE.com_cache.sys.ini',
			'/administrator/language/de-DE/de-DE.com_categories.ini',
			'/administrator/language/de-DE/de-DE.com_categories.sys.ini',
			'/administrator/language/de-DE/de-DE.com_checkin.ini',
			'/administrator/language/de-DE/de-DE.com_checkin.sys.ini',
			'/administrator/language/de-DE/de-DE.com_config.ini',
			'/administrator/language/de-DE/de-DE.com_config.sys.ini',
			'/administrator/language/de-DE/de-DE.com_contact.ini',
			'/administrator/language/de-DE/de-DE.com_contact.sys.ini',
			'/administrator/language/de-DE/de-DE.com_contenthistory.ini',
			'/administrator/language/de-DE/de-DE.com_contenthistory.sys.ini',
			'/administrator/language/de-DE/de-DE.com_content.ini',
			'/administrator/language/de-DE/de-DE.com_content.sys.ini',
			'/administrator/language/de-DE/de-DE.com_cpanel.ini',
			'/administrator/language/de-DE/de-DE.com_cpanel.sys.ini',
			'/administrator/language/de-DE/de-DE.com_fields.ini',
			'/administrator/language/de-DE/de-DE.com_fields.sys.ini',
			'/administrator/language/de-DE/de-DE.com_finder.ini',
			'/administrator/language/de-DE/de-DE.com_finder.sys.ini',
			'/administrator/language/de-DE/de-DE.com_installer.ini',
			'/administrator/language/de-DE/de-DE.com_installer.sys.ini',
			'/administrator/language/de-DE/de-DE.com_joomlaupdate.ini',
			'/administrator/language/de-DE/de-DE.com_joomlaupdate.sys.ini',
			'/administrator/language/de-DE/de-DE.com_languages.ini',
			'/administrator/language/de-DE/de-DE.com_languages.sys.ini',
			'/administrator/language/de-DE/de-DE.com_login.ini',
			'/administrator/language/de-DE/de-DE.com_login.sys.ini',
			'/administrator/language/de-DE/de-DE.com_mailto.sys.ini',
			'/administrator/language/de-DE/de-DE.com_media.ini',
			'/administrator/language/de-DE/de-DE.com_media.sys.ini',
			'/administrator/language/de-DE/de-DE.com_menus.ini',
			'/administrator/language/de-DE/de-DE.com_menus.sys.ini',
			'/administrator/language/de-DE/de-DE.com_messages.ini',
			'/administrator/language/de-DE/de-DE.com_messages.sys.ini',
			'/administrator/language/de-DE/de-DE.com_modules.ini',
			'/administrator/language/de-DE/de-DE.com_modules.sys.ini',
			'/administrator/language/de-DE/de-DE.com_newsfeeds.ini',
			'/administrator/language/de-DE/de-DE.com_newsfeeds.sys.ini',
			'/administrator/language/de-DE/de-DE.com_plugins.ini',
			'/administrator/language/de-DE/de-DE.com_plugins.sys.ini',
			'/administrator/language/de-DE/de-DE.com_postinstall.ini',
			'/administrator/language/de-DE/de-DE.com_postinstall.sys.ini',
			'/administrator/language/de-DE/de-DE.com_privacy.ini',
			'/administrator/language/de-DE/de-DE.com_privacy.sys.ini',
			'/administrator/language/de-DE/de-DE.com_redirect.ini',
			'/administrator/language/de-DE/de-DE.com_redirect.sys.ini',
			'/administrator/language/de-DE/de-DE.com_search.ini',
			'/administrator/language/de-DE/de-DE.com_search.sys.ini',
			'/administrator/language/de-DE/de-DE.com_tags.ini',
			'/administrator/language/de-DE/de-DE.com_tags.sys.ini',
			'/administrator/language/de-DE/de-DE.com_templates.ini',
			'/administrator/language/de-DE/de-DE.com_templates.sys.ini',
			'/administrator/language/de-DE/de-DE.com_users.ini',
			'/administrator/language/de-DE/de-DE.com_users.sys.ini',
			'/administrator/language/de-DE/de-DE.com_weblinks.ini',
			'/administrator/language/de-DE/de-DE.com_weblinks.sys.ini',
			'/administrator/language/de-DE/de-DE.com_wrapper.ini',
			'/administrator/language/de-DE/de-DE.com_wrapper.sys.ini',
			'/administrator/language/de-DE/de-DE.ini',
			'/administrator/language/de-DE/de-DE.lib_joomla.ini',
			'/administrator/language/de-DE/de-DE.localise.php',
			'/administrator/language/de-DE/de-DE.mod_custom.ini',
			'/administrator/language/de-DE/de-DE.mod_custom.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_feed.ini',
			'/administrator/language/de-DE/de-DE.mod_feed.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_latestactions.ini',
			'/administrator/language/de-DE/de-DE.mod_latestactions.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_latest.ini',
			'/administrator/language/de-DE/de-DE.mod_latest.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_logged.ini',
			'/administrator/language/de-DE/de-DE.mod_logged.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_login.ini',
			'/administrator/language/de-DE/de-DE.mod_login.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_menu.ini',
			'/administrator/language/de-DE/de-DE.mod_menu.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_multilangstatus.ini',
			'/administrator/language/de-DE/de-DE.mod_multilangstatus.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_popular.ini',
			'/administrator/language/de-DE/de-DE.mod_popular.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_privacy_dashboard.ini',
			'/administrator/language/de-DE/de-DE.mod_privacy_dashboard.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_quickicon.ini',
			'/administrator/language/de-DE/de-DE.mod_quickicon.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_sampledata.ini',
			'/administrator/language/de-DE/de-DE.mod_sampledata.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_stats_admin.ini',
			'/administrator/language/de-DE/de-DE.mod_stats_admin.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_status.ini',
			'/administrator/language/de-DE/de-DE.mod_status.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_submenu.ini',
			'/administrator/language/de-DE/de-DE.mod_submenu.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_title.ini',
			'/administrator/language/de-DE/de-DE.mod_title.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_toolbar.ini',
			'/administrator/language/de-DE/de-DE.mod_toolbar.sys.ini',
			'/administrator/language/de-DE/de-DE.mod_version.ini',
			'/administrator/language/de-DE/de-DE.mod_version.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_actionlog_joomla.ini',
			'/administrator/language/de-DE/de-DE.plg_actionlog_joomla.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_cookie.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_cookie.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_gmail.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_gmail.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_joomla.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_joomla.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_ldap.ini',
			'/administrator/language/de-DE/de-DE.plg_authentication_ldap.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_captcha_recaptcha.ini',
			'/administrator/language/de-DE/de-DE.plg_captcha_recaptcha_invisible.ini',
			'/administrator/language/de-DE/de-DE.plg_captcha_recaptcha_invisible.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_captcha_recaptcha.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_confirmconsent.ini',
			'/administrator/language/de-DE/de-DE.plg_content_confirmconsent.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_contact.ini',
			'/administrator/language/de-DE/de-DE.plg_content_contact.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_emailcloak.ini',
			'/administrator/language/de-DE/de-DE.plg_content_emailcloak.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_fields.ini',
			'/administrator/language/de-DE/de-DE.plg_content_fields.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_finder.ini',
			'/administrator/language/de-DE/de-DE.plg_content_finder.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_geshi.ini',
			'/administrator/language/de-DE/de-DE.plg_content_geshi.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_joomla.ini',
			'/administrator/language/de-DE/de-DE.plg_content_joomla.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_loadmodule.ini',
			'/administrator/language/de-DE/de-DE.plg_content_loadmodule.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_pagebreak.ini',
			'/administrator/language/de-DE/de-DE.plg_content_pagebreak.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_pagenavigation.ini',
			'/administrator/language/de-DE/de-DE.plg_content_pagenavigation.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_content_vote.ini',
			'/administrator/language/de-DE/de-DE.plg_content_vote.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_codemirror.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_codemirror.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_none.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_none.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_tinymce.ini',
			'/administrator/language/de-DE/de-DE.plg_editors_tinymce.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_article.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_article.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_contact.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_contact.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_fields.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_fields.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_image.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_image.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_menu.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_menu.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_module.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_module.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_pagebreak.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_pagebreak.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_readmore.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_readmore.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_weblink.ini',
			'/administrator/language/de-DE/de-DE.plg_editors-xtd_weblink.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_extension_joomla.ini',
			'/administrator/language/de-DE/de-DE.plg_extension_joomla.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_calendar.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_calendar.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_checkboxes.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_checkboxes.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_color.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_color.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_editor.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_editor.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_image.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_imagelist.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_imagelist.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_image.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_integer.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_integer.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_list.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_list.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_media.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_media.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_radio.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_radio.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_repeatable.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_repeatable.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_sql.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_sql.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_textarea.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_textarea.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_text.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_text.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_url.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_url.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_usergrouplist.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_usergrouplist.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_user.ini',
			'/administrator/language/de-DE/de-DE.plg_fields_user.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_categories.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_categories.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_contacts.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_contacts.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_content.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_content.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_newsfeeds.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_newsfeeds.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_tags.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_tags.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_weblinks.ini',
			'/administrator/language/de-DE/de-DE.plg_finder_weblinks.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_folderinstaller.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_folderinstaller.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_packageinstaller.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_packageinstaller.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_urlinstaller.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_urlinstaller.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_webinstaller.ini',
			'/administrator/language/de-DE/de-DE.plg_installer_webinstaller.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_actionlogs.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_actionlogs.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_consents.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_consents.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_contact.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_contact.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_content.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_content.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_message.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_message.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_user.ini',
			'/administrator/language/de-DE/de-DE.plg_privacy_user.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_eos310.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_eos310.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_extensionupdate.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_extensionupdate.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_joomlaupdate.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_joomlaupdate.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_phpversioncheck.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_phpversioncheck.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_privacycheck.ini',
			'/administrator/language/de-DE/de-DE.plg_quickicon_privacycheck.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_sampledata_blog.ini',
			'/administrator/language/de-DE/de-DE.plg_sampledata_blog.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_categories.ini',
			'/administrator/language/de-DE/de-DE.plg_search_categories.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_contacts.ini',
			'/administrator/language/de-DE/de-DE.plg_search_contacts.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_content.ini',
			'/administrator/language/de-DE/de-DE.plg_search_content.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_newsfeeds.ini',
			'/administrator/language/de-DE/de-DE.plg_search_newsfeeds.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_tags.ini',
			'/administrator/language/de-DE/de-DE.plg_search_tags.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_search_weblinks.ini',
			'/administrator/language/de-DE/de-DE.plg_search_weblinks.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_actionlogs.ini',
			'/administrator/language/de-DE/de-DE.plg_system_actionlogs.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_cache.ini',
			'/administrator/language/de-DE/de-DE.plg_system_cache.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_debug.ini',
			'/administrator/language/de-DE/de-DE.plg_system_debug.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_fields.ini',
			'/administrator/language/de-DE/de-DE.plg_system_fields.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_highlight.ini',
			'/administrator/language/de-DE/de-DE.plg_system_highlight.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_languagecode.ini',
			'/administrator/language/de-DE/de-DE.plg_system_languagecode.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_languagefilter.ini',
			'/administrator/language/de-DE/de-DE.plg_system_languagefilter.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_log.ini',
			'/administrator/language/de-DE/de-DE.plg_system_logout.ini',
			'/administrator/language/de-DE/de-DE.plg_system_logout.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_logrotation.ini',
			'/administrator/language/de-DE/de-DE.plg_system_logrotation.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_log.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_p3p.ini',
			'/administrator/language/de-DE/de-DE.plg_system_p3p.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_privacyconsent.ini',
			'/administrator/language/de-DE/de-DE.plg_system_privacyconsent.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_redirect.ini',
			'/administrator/language/de-DE/de-DE.plg_system_redirect.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_remember.ini',
			'/administrator/language/de-DE/de-DE.plg_system_remember.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_sef.ini',
			'/administrator/language/de-DE/de-DE.plg_system_sef.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_sessiongc.ini',
			'/administrator/language/de-DE/de-DE.plg_system_sessiongc.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_stats.ini',
			'/administrator/language/de-DE/de-DE.plg_system_stats.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_updatenotification.ini',
			'/administrator/language/de-DE/de-DE.plg_system_updatenotification.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_system_weblinks.ini',
			'/administrator/language/de-DE/de-DE.plg_system_weblinks.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_twofactorauth_totp.ini',
			'/administrator/language/de-DE/de-DE.plg_twofactorauth_totp.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_twofactorauth_yubikey.ini',
			'/administrator/language/de-DE/de-DE.plg_twofactorauth_yubikey.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_user_contactcreator.ini',
			'/administrator/language/de-DE/de-DE.plg_user_contactcreator.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_user_joomla.ini',
			'/administrator/language/de-DE/de-DE.plg_user_joomla.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_user_profile.ini',
			'/administrator/language/de-DE/de-DE.plg_user_profile.sys.ini',
			'/administrator/language/de-DE/de-DE.plg_user_terms.ini',
			'/administrator/language/de-DE/de-DE.plg_user_terms.sys.ini',
			'/administrator/language/de-DE/de-DE.tpl_hathor.ini',
			'/administrator/language/de-DE/de-DE.tpl_hathor.sys.ini',
			'/administrator/language/de-DE/de-DE.tpl_isis.ini',
			'/administrator/language/de-DE/de-DE.tpl_isis.sys.ini',
			'/administrator/language/de-DE/de-DE.xml',
			// Frontend
			'/language/de-DE/de-DE.com_ajax.ini',
			'/language/de-DE/de-DE.com_config.ini',
			'/language/de-DE/de-DE.com_contact.ini',
			'/language/de-DE/de-DE.com_content.ini',
			'/language/de-DE/de-DE.com_finder.ini',
			'/language/de-DE/de-DE.com_mailto.ini',
			'/language/de-DE/de-DE.com_media.ini',
			'/language/de-DE/de-DE.com_messages.ini',
			'/language/de-DE/de-DE.com_newsfeeds.ini',
			'/language/de-DE/de-DE.com_privacy.ini',
			'/language/de-DE/de-DE.com_search.ini',
			'/language/de-DE/de-DE.com_tags.ini',
			'/language/de-DE/de-DE.com_users.ini',
			'/language/de-DE/de-DE.com_weblinks.ini',
			'/language/de-DE/de-DE.com_wrapper.ini',
			'/language/de-DE/de-DE.files_joomla.sys.ini',
			'/language/de-DE/de-DE.finder_cli.ini',
			'/language/de-DE/de-DE.ini',
			'/language/de-DE/de-DE.lib_fof.ini',
			'/language/de-DE/de-DE.lib_fof.sys.ini',
			'/language/de-DE/de-DE.lib_idna_convert.sys.ini',
			'/language/de-DE/de-DE.lib_joomla.ini',
			'/language/de-DE/de-DE.lib_joomla.sys.ini',
			'/language/de-DE/de-DE.lib_phpass.sys.ini',
			'/language/de-DE/de-DE.lib_phputf8.sys.ini',
			'/language/de-DE/de-DE.lib_simplepie.sys.ini',
			'/language/de-DE/de-DE.localise.php',
			'/language/de-DE/de-DE.mod_articles_archive.ini',
			'/language/de-DE/de-DE.mod_articles_archive.sys.ini',
			'/language/de-DE/de-DE.mod_articles_categories.ini',
			'/language/de-DE/de-DE.mod_articles_categories.sys.ini',
			'/language/de-DE/de-DE.mod_articles_category.ini',
			'/language/de-DE/de-DE.mod_articles_category.sys.ini',
			'/language/de-DE/de-DE.mod_articles_latest.ini',
			'/language/de-DE/de-DE.mod_articles_latest.sys.ini',
			'/language/de-DE/de-DE.mod_articles_news.ini',
			'/language/de-DE/de-DE.mod_articles_news.sys.ini',
			'/language/de-DE/de-DE.mod_articles_popular.ini',
			'/language/de-DE/de-DE.mod_articles_popular.sys.ini',
			'/language/de-DE/de-DE.mod_banners.ini',
			'/language/de-DE/de-DE.mod_banners.sys.ini',
			'/language/de-DE/de-DE.mod_breadcrumbs.ini',
			'/language/de-DE/de-DE.mod_breadcrumbs.sys.ini',
			'/language/de-DE/de-DE.mod_custom.ini',
			'/language/de-DE/de-DE.mod_custom.sys.ini',
			'/language/de-DE/de-DE.mod_feed.ini',
			'/language/de-DE/de-DE.mod_feed.sys.ini',
			'/language/de-DE/de-DE.mod_finder.ini',
			'/language/de-DE/de-DE.mod_finder.sys.ini',
			'/language/de-DE/de-DE.mod_footer.ini',
			'/language/de-DE/de-DE.mod_footer.sys.ini',
			'/language/de-DE/de-DE.mod_languages.ini',
			'/language/de-DE/de-DE.mod_languages.sys.ini',
			'/language/de-DE/de-DE.mod_login.ini',
			'/language/de-DE/de-DE.mod_login.sys.ini',
			'/language/de-DE/de-DE.mod_menu.ini',
			'/language/de-DE/de-DE.mod_menu.sys.ini',
			'/language/de-DE/de-DE.mod_random_image.ini',
			'/language/de-DE/de-DE.mod_random_image.sys.ini',
			'/language/de-DE/de-DE.mod_related_items.ini',
			'/language/de-DE/de-DE.mod_related_items.sys.ini',
			'/language/de-DE/de-DE.mod_search.ini',
			'/language/de-DE/de-DE.mod_search.sys.ini',
			'/language/de-DE/de-DE.mod_stats.ini',
			'/language/de-DE/de-DE.mod_stats.sys.ini',
			'/language/de-DE/de-DE.mod_syndicate.ini',
			'/language/de-DE/de-DE.mod_syndicate.sys.ini',
			'/language/de-DE/de-DE.mod_tags_popular.ini',
			'/language/de-DE/de-DE.mod_tags_popular.sys.ini',
			'/language/de-DE/de-DE.mod_tags_similar.ini',
			'/language/de-DE/de-DE.mod_tags_similar.sys.ini',
			'/language/de-DE/de-DE.mod_users_latest.ini',
			'/language/de-DE/de-DE.mod_users_latest.sys.ini',
			'/language/de-DE/de-DE.mod_weblinks.ini',
			'/language/de-DE/de-DE.mod_weblinks.sys.ini',
			'/language/de-DE/de-DE.mod_whosonline.ini',
			'/language/de-DE/de-DE.mod_whosonline.sys.ini',
			'/language/de-DE/de-DE.mod_wrapper.ini',
			'/language/de-DE/de-DE.mod_wrapper.sys.ini',
			'/language/de-DE/de-DE.tpl_beez3.ini',
			'/language/de-DE/de-DE.tpl_beez3.sys.ini',
			'/language/de-DE/de-DE.tpl_protostar.ini',
			'/language/de-DE/de-DE.tpl_protostar.sys.ini',
			'/language/de-DE/de-DE.xml',
		);
	}

	/**
	 * Function to perform changes during postflight
	 *
	 * @param   string            $type    The action being performed
	 * @param   ComponentAdapter  $parent  The class calling this method
	 *
	 * @return  void
	 *
	 * @since   4.0.0v1
	 */
	public function postflight($type, $parent)
	{
		$this->removeFiles();
	}
}