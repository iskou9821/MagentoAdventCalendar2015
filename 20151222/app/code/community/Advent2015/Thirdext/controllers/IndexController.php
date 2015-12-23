<?php
class Advent2015_Thirdext_IndexController extends Mage_Core_Controller_Front_Action {
    
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
    
    public function addAction() {
        //POSTされたパラメータから配列を作成
        $data = array(
            'ext_text' => $this->getRequest()->getPost('ext_text'),
            'ext_num' => $this->getRequest()->getPost('ext_num')
        );
        
        //保存先となるモデルオブジェクトを生成し、データをセット
        $model = Mage::getModel('Advent2015_Thirdext/extSampleModel');
        $model->setData($data);
        
        //データベースに保存
        $model->save();
        
        //元のページにリダイレクト
        return $this->_redirect('ext-db-test');
    }
}