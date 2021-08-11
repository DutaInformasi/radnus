<?php

use yii\db\Migration;

/**
 * Class m210702_065207_add_primarykey_radusergroup
 */
class m210702_065207_add_primarykey_radusergroup extends Migration
{
    public $tableName = 'radusergroup';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'id', $this->integer());

        $this->addPrimaryKey('primary-id-radusergroup', $this->tableName, ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropPrimaryKey('primary-id-radusergroup', $this->tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210702_065207_add_primarykey_radusergroup cannot be reverted.\n";

        return false;
    }
    */
}
