<?php
class Advent2015_Thirdext_Block_IndexForm extends Mage_Core_Block_Template {
    /*
      データベースに保存されている情報のリストを取得する
      (ここでは紹介していないが、ページングや取得データのフィルタに関わる機能もある)
    */
    public function getSampleModels() {
        //データベースからの読み込みを行う
        return Mage::getResourceModel('Advent2015_Thirdext/extSampleModel_collection')
                        ->addOrder('model_id', 'DESC');
    }
    
    /*
      新規追加用のFormDataをPostする先となるURLを生成する
    */
    public function getActionUrl() {
        return Mage::getBaseUrl() . 'ext-db-test/index/add';
    }
}
