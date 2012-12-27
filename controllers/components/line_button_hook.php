<?php
/**
 * [HookComponent] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
class LineButtonHookComponent extends Object {
/**
 * 登録フック
 * 
 * @var array
 */
	var $registerHooks = array('startup');
/**
 * startup
 * 
 * @param Object $controller 
 * @access public
 * @return void
 */
	function startup($controller) {
		$controller->helpers[] = 'LineButton.LineButton';
	}

}
