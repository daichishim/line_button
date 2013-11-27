<?php
class LineButtonControllerEventListener extends BcControllerEventListener {
	
/**
 * 登録イベント
 * 
 * @var array
 */
	public $events = array('Pages.startup');
	
/**
 * startup
 * 
 * @param Object $controller 
 * @access public
 * @return void
 */
	public function pagesStartup(CakeEvent $event) {
		
		$Controller = $event->subject();
		$Controller->helpers[] = 'LineButton.LineButton';
		
	}
	
}