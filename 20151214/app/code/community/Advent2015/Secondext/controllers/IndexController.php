<?php
class Advent2015_Secondext_IndexController extends Mage_Core_Controller_Front_Action {
    
	/*
	「/ext-test」もしくは「/ext-test/index」にアクセスした場合に呼ばれる。
	　「簡単なやり方」のルーティング
	*/
    public function indexAction() {
        $this->loadLayout();

        $block = $this->getLayout()->createBlock(
            'Mage_Core_Block_Template',
            'secondext',
            array('template' => 'secondext/index.phtml')
        );

        $this->getLayout()->getBlock('root')->setTemplate('page/3columns.phtml'); //画面のレイアウトを指定
        $this->getLayout()->getBlock('content')->append($block);
        $this->getLayout()->getBlock('head')->setTitle('タイトル');
        $this->_initLayoutMessages('core/session');
        $this->renderLayout();
    }

    /*
    「/ext-test/index/form」にアクセスした場合に呼ばれる。
    　「一般的なやり方」のルーティング
    */
    public function formAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

}