<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Languages`.
 */
class m180718_163248_create_Languages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Languages', [

            'LanguageCode'=>$this->string(2)->notNull(),
            'Status' => "ENUM( 'active','inactive')  NOT NULL DEFAULT 'inactive'",
            'Name' => $this->string(80)->notNull(),
            'CreatedDate' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'UpdatedDate' => 'TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->addPrimaryKey('PrimaryKey','Languages','LanguageCode');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Languages');
    }
}
