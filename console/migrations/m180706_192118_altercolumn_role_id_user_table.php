<?php

use yii\db\Migration;

/**
 * Class m180706_192118_altercolumn_role_id_user_table
 */
class m180706_192118_altercolumn_role_id_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('user','role_id','int(6) NOT NULL');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('user','role_id','int(6)');
        echo "m180706_192118_altercolumn_role_id_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180706_192118_altercolumn_role_id_user_table cannot be reverted.\n";

        return false;
    }
    */
}
