<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

class TemplateStars05 extends TemplateFloat{
	var $type = 'Stars05';
	var $default = null;
	var $default_value = null;
	
	function TemplateStars05(){
    	parent::__construct();
	}

    function get_field_def(){
        $def = parent::get_field_def();
        $def['precision'] = isset($this->ext1) && intval($this->ext1) ? intval($this->ext1) : $this->precision;
		$def['dbType'] = 'float'; //!!!!!!!
        return $def;
    }

    function get_db_type()
	{
		if(empty($this->len)) {
			return parent::get_db_type();
		}
		$precision = (!empty($this->precision)) ? $this->precision : 6;
		return " ".sprintf($GLOBALS['db']->getColumnType("decimal_tpl"), $this->len, $precision); 
	}
}

?>
