<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.23',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'smsad',
  'author' => 'Abhishek Jain',
  'description' => 'SMS Country',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'SMS_Addon',
  'published_date' => '2017-01-26 12:08:35',
  'type' => 'module',
  'version' => 1485432515,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'SMS_country_Addon',
  'copy' => 
  array (
	array (
      'from' => '<basepath>/application/modules.php',
      'to' => 'custom/Extension/application/Ext/Include/SMS_country_Addon.php',
    ),
	array (
      'from' => '<basepath>/custom',
      'to' => 'custom/modules',
    ),
	array (
      'from' => '<basepath>/modules',
      'to' => 'modules',
    ),
	array (
      'from' => '<basepath>/Extension',
      'to' => 'custom/Extension/modules',
    ),
	array (
      'from' => '<basepath>/Relationship/Extension/application/Ext/TableDictionary',
      'to' => 'custom/Extension/application/Ext/TableDictionary',
    ),
	array (
      'from' => '<basepath>/Relationship/metadata',
      'to' => 'custom/metadata',
    ),
	array (
      'from' => '<basepath>/AOW_Actions/actions',
      'to' => 'modules/AOW_Actions/actions',
    ),
	array (
	  'from' => '<basepath>/AOW_Actions/actions.php',
	  'to' => 'custom/Extension/modules/AOW_Actions/Ext/Actions/sms_action.php',
	),
	array (
		'from' => '<basepath>/Configurator/sms_config_meta.php',
		'to' => 'custom/modules/Configurator/sms_config_meta.php',
	),
	array (
		'from' => '<basepath>/Configurator/sms_configurator.php',
		'to' => 'custom/modules/Configurator/sms_configurator.php',
	),
	array (
		'from' => '<basepath>/Configurator/sms_proxy.php',
		'to' => 'custom/modules/Configurator/sms_proxy.php',
	),
	array (
		'from' => '<basepath>/Configurator/sms_proxy_meta.php',
		'to' => 'custom/modules/Configurator/sms_proxy_meta.php',
	),
	array (
		'from' => '<basepath>/Configurator/sms_configurator_table.tpl',
		'to' => 'custom/modules/Configurator/sms_configurator_table.tpl',
	),
	array (
		'from' => '<basepath>/Configurator/sms_configurator.tpl',
		'to' => 'custom/modules/Configurator/sms_configurator.tpl',
	),
	array (
		'from' => '<basepath>/Configurator/sms_proxy.tpl',
		'to' => 'custom/modules/Configurator/sms_proxy.tpl',
	),
	array (
		'from' => '<basepath>/Configurator/sms_proxy_table.tpl',
		'to' => 'custom/modules/Configurator/sms_proxy_table.tpl',
	),
  ),
  'administration' =>
	array (
	 array (
			'from' => '<basepath>/Administration/smsaddon_configurator.php',
		),
	 ),
  'language' =>
	array (
	 array (
			'from' => '<basepath>/Administration/language/en_us.lang.php',
			'to_module' => 'Administration',
			'language' => 'en_us',
		),
	 array (
			'from' => '<basepath>/Configurator/language/en_us.lang.php',
			'to_module' => 'Configurator',
			'language' => 'en_us',
		),
	 array(
            'from' => '<basepath>/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us'
        ),
     array (
			'from' => '<basepath>/AOW_Actions/en_ussms.php',
			'to_module' => 'AOW_Actions',
            'language' => 'en_us'
		),
		
	),
  'post_execute' => array 
	(
		0 =>  '<basepath>/scripts/post_execute.php',
	),
   'custom_fields' => array(
        //Text
        array(
            'name' => 'message_status_c',
            'label' => 'LBL_MESSAGE_STATUS',
            'type' => 'varchar',
            'module' => 'smsad_SMS',
            'help' => '',
            'comment' => 'MESSAGE STATUS',
            'default_value' => '',
            'max_size' => 255,
            'required' => false, // true or false
            'reportable' => true, // true or false
            'audited' => true, // true or false
            'importable' => 'true', // 'true', 'false', 'required'
            'duplicate_merge' => false, // true or false
        ),
	),
);