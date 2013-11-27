<?php
/**
 * [admin] line_button
 *
 * @author			daichishim
 * @license			MIT
 */
class LineButtonConfigsController extends BcPluginAppController {
/**
 * Controller Name
 * 
 * @var string
 */
	public $name = 'LineButtonConfigs';
/**
 * Components Use
 * 
 * @var array
 */
	public $components = array('BcAuth', 'Cookie', 'BcAuthConfigure');
/**
 * 設定画面トップ
 * 
 * @return void
 * @access public
 */
	public function admin_index() {

		if(!$this->request->data) {
			$this->request->data = array('LineButtonConfig' => $this->LineButtonConfig->findExpanded());
		} else {
			$this->LineButtonConfig->set($this->request->data);
			if($this->LineButtonConfig->validates()) {
				if($this->LineButtonConfig->saveKeyValue($this->request->data)) {
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
