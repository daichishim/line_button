<?php
/**
 * Helper line_button
 *
 * @author			daichishim
 * @license			MIT
 */
class LineButtonHelper extends AppHelper {
/**
 * 利用Helperを定義
 * 
 * @var array
 */
	var $helpers = array('BcBaser');
/**
 * LINEで送るボタンを表示する
 * 
 * @access public
 * @return void
 */
	function show($options = array()) {

		$LineButtonConfig = ClassRegistry::init('LineButton.LineButtonConfig');
		$lineButtonConfigs = array('LineButtonConfig' => $LineButtonConfig->findExpanded());

		if($lineButtonConfigs['LineButtonConfig']['use']) {

			$_options = array('type' => '1');
			$options = array_merge($_options, $options);

			$btnImage = '';
			switch ($options['type']) {
				case 1:
					$btnImage = 'linebutton_86x20.png';
					break;
				case 2:
					$btnImage = 'linebutton_20x20.png';
					break;
				case 3:
					$btnImage = 'linebutton_30x30.png';
					break;
				case 4:
					$btnImage = 'linebutton_40x40.png';
					break;
				case 5:
					$btnImage = 'linebutton_36x60.png';
					break;
				default:
					$btnImage = 'linebutton_86x20.png';
					break;
			}

			$url = 'http://line.naver.jp/R/msg/text/?';
			$url .= urlencode(Router::url($this->here, true));
			$this->BcBaser->img('/line_button/img/' . $btnImage, array(
				'url' => $url, 'alt' => 'LINEで送る'));

		}

	}

}
