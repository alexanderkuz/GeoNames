<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Languages`.
 */
class m180718_163249_create_Languages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Language', [

            'LanguageCode'=>$this->string(2)->notNull(),
            'Code'=>'varchar(2) GENERATED ALWAYS AS (`LanguageCode`) VIRTUAL',
            'Status' => "ENUM( 'active','inactive')  NOT NULL DEFAULT 'inactive'",
            'CodeName'=>'varchar(80) GENERATED ALWAYS AS (LOWER(`Name`)) VIRTUAL',
            'Sort'=>'TINYINT(4) UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT',
            'Name' => $this->string(80)->notNull(),
            'CreatedDate' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'UpdatedDate' => 'TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->addPrimaryKey('PrimaryKey','Language','LanguageCode');
        //$this->createIndex('idx-sort','Language','sort',true);



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Language');
    }
}
