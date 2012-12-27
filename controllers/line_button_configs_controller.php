<?php
/**
 * [admin] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
class LineButtonConfigsController extends BaserPluginAppController {
/**
 * Controller Name
 * 
 * @var string
 */
	var $name = 'LineButtonConfigs';
/**
 * Components Use
 * 
 * @var array
 */
	var $components = array('BcAuth', 'Cookie', 'BcAuthConfigure');
/**
 * 設定画面トップ
 * 
 * @return void
 * @access public
 */
	function admin_index() {

		if(!$this->data) {
			$this->data = array('LineButtonConfig' => $this->LineButtonConfig->findExpanded());
		} else {
			$this->LineButtonConfig->set($this->data);
			if($this->LineButtonConfig->validates()) {
				if($this->LineButtonConfig->saveKeyValue($this->data)) {
					$this->Session->setFlash('設定を保存しました。');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('設定の保存に失敗しました。');
				}
			}
		}
		$this->pageTitle = 'LINEボタン設定';

	}

}
