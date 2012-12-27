<?php
/**
 * line_button
 *
 * @author			daichishim
 * @license			MIT
 */
/**
 * システムナビ
 */
$config['BcApp.adminNavi.line_button'] = array(
		'name'		=> 'LINEボタン プラグイン',
		'contents'	=> array(
			array('name' => 'プラグイン設定',
				'url' => array(
					'admin' => true,
					'plugin' => 'line_button',
					'controller' => 'line_button_configs',
					'action' => 'index')
			)
	)
);
