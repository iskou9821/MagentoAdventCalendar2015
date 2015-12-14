<?php
class Advent2015_Secondext_IndexController extends Mage_Core_Controller_Front_Action {
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
}