LineButton：baserCMS Plugin
==========

baserCMSに「LINEで送るボタン」を簡単に設置できるプラグインです。

- [LINEで送るボタン](http://media.line.naver.jp/ja/)


使い方
-------------

* 圧縮ファイルを解凍後、/app/plugins/line_button に配置してください。　
* プラグイン管理画面に入り、表示されている「LINEボタン」をインストールしてください。
* 表示させたい箇所に `<?php $lineButton->show() ?>` と記述してください。
* テンプレートに書いても、固定ページ編集画面の本文内、ブログ記事編集画面の概要、及び本文内に直書いても利用できます。


オプション設定
-------------

`<?php $lineButton->show() ?>` には、引数にオプションを指定することができます。

* `array('type' => '1')` 又は未設定・・・デフォルトでは 86x20 サイズの画像
* `array('type' => '2')` 20x20 サイズの画像
* `array('type' => '3')` 30x30 の画像
* `array('type' => '4')` 40x40 の画像
* `array('type' => '5')` 36x60 の画像


Documentation
-------------

- See [baserCMS Official](http://basercms.net/)
- See [baserCMS Users Community](http://sites.google.com/site/baserusers/)
- See [baserCMS Users Forum](http://forum.basercms.net/)
- See [baserCMS Core Development Project](http://project.e-catchup.jp/projects/show/basercms) 
- See [CakePHP - the rapid development PHP framework](http://cakephp.jp)
