<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
define('MODULE_INSTALLER_DISABLE_CONFIG_OVERRIDE',true);
define('MODULE_INSTALLER_DISABLE_DEFINE_OVERRIDE',true);
 // NOTE => manifest to install new field type in sugar
$manifest = array (
	'acceptable_sugar_versions' => array ('6.*.*','7.*.*'),
	'acceptable_sugar_flavors' => array ('CE','PRO','ENT','ULT'),
          'readme'=>'',
          'author' => 'nobdy',
          'description' => 'Star-Rating-0-5 data type',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'Star-Rating-0-5',
          'published_date' => '2016-02-01',
          'type' => 'module',
          'version' => '7.6.1',
          );
$installdefs = array (
'id' => 'Star-Rating-0-5',
'copy' =>
  array (
    0 =>
    array (
     		'from'=> '<basepath>/SugarModules/custom/',
    	 	'to'=> 'custom/',
    ),
  ),
// define custom field scoring for test:  
'custom_fields' => 
  array (
    'Accountsstar_scoring_c' => 
    array (
      'id' => 'Accountsstar_scoring_c',
      'name' => 'star_scoring_c',
      'label' => 'LBL_STAR_SCORING',
      'module' => 'Accounts',
      'type' => 'Stars05',
      'max_size' => '255',
      'require_option' => '0',
      'default_value' => '',
      'audited' => '0',
      'mass_update' => '0',
      'duplicate_merge' => '1',
      'reportable' => '1',
      'importable' => 'true',
      'ext1' => '0',
      'ext2' => '0',
      'ext3' => '',
      'ext4' => '',
    ),
  ), 
'language' =>
  array (
    array (
      'from' => '<basepath>/SugarModules/Language/en_us.Stars05.php',
      'to_module' => 'ModuleBuilder',
      'language' => 'en_us',
    ),
    array (
      'from' => '<basepath>/SugarModules/Language/en_UK.Stars05.php',
      'to_module' => 'ModuleBuilder',
      'language' => 'en_UK',
    ),
    array (
      'from' => '<basepath>/SugarModules/Language/de_DE.Stars05.php',
      'to_module' => 'ModuleBuilder',
      'language' => 'de_DE',
    ),
// name of custom field scoring for test:	
    array (
      'from' => '<basepath>/SugarModules/Language/en_us.star_scoring.php',
      'to_module' => 'Accounts',
      'language' => 'en_us',
    ),
  ),
// logic_hook to fill custom field scoring for test:	
'logic_hooks' => array(
	array(
		'module' => 'Accounts',
		'hook' => 'before_save',
		'order' => 99,
		'description' => 'Set Scoring to random value',
		'file' => 'custom/modules/Accounts/myStarHook.php',
		'class' => 'myStarHook',
		'function' => 'myStarFunction',
		),
	),  
);
