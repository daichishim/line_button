<?php
/**
 * [HookComponent] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
class LineButtonHookComponent extends Component {
/**
 * 登録フック
 * 
 * @var array
 */
	public $registerHooks = array('startup');
/**
 * startup
 * 
 * @param Object $controller 
 * @access public
 * @return void
 */
	public function startup($controller) {
		$controller->helpers[] = 'LineButton.LineButton';
	}

}
