<?php
$this->startSetup();

//テーブル名を取得
$tableName = $this->getTable('Advent2015_Thirdext/extSampleModel');

//データベースとのコネクションを取得
$conn = $this->getConnection();

//テーブルが存在しなければ作成
if ($conn->isTableExists($tableName) != true) {
    //新規テーブルの定義を作成
    $table = $conn
        ->newTable($tableName)
        ->addColumn('model_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ), 'Model Id')
        ->addColumn('ext_text', Varien_Db_Ddl_Table::TYPE_VARCHAR, 256, array(
            'nullable'  => true,
        ), 'text data')
        ->addColumn('ext_num', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'nullable'  => true,
        ), 'num data');
        
    //テーブル作成を実行
    $conn->createTable($table);
}

$this->endSetup();
